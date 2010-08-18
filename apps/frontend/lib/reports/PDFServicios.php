<?php


class PDFServicios extends sfTCPDF {

	var $flowingBlockAttr;
	var $widths;
	var $aligns;
	var $conf;
	var $angle=0;
  var $jump=6;

  public function __construct($orientation='P', $unit='mm', $format='A4', $unicode=true, $encoding='UTF-8', $diskcache=false)
  {
    parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache);
    $this->headerCallback = 'MyHeader';
            
  }

  /**
   * This method is used to render the page header.
   * It is automatically called by AddPage() and could be overwritten using a Callback.
   *
   * @access public
   * @see $headerCallback
   */
  public function Header()
  {
    if ($this->print_header)
    {
      $this->MyHeader();
    }
  }

  public function MyHeader()
  {
    $ormargins = $this->getOriginalMargins();
    $headerfont = $this->getHeaderFont();
    $headerdata = $this->getHeaderData();
    // fecha hora
    $this->SetFont($headerfont[0], 'B', 9);
    $this->SetX(160);
    $this->Cell(0, 5, 'Fecha: '.date('d/m/Y'), true, 1, '', 0, '', 0);
    $this->SetX(160);
    $this->Cell(0, 5, 'Hora: '.date('h:i a'), true, 1, '', 0, '', 0);
    $this->SetXY(10,10);

    if (($headerdata['logo']) AND ($headerdata['logo'] != K_BLANK_IMAGE)) {
      $this->Image(K_PATH_IMAGES.$headerdata['logo'], '', '', $headerdata['logo_width']);
      $imgy = $this->getImageRBY();
    } else {
      $imgy = $this->GetY();
    }
    $cell_height = round(($this->getCellHeightRatio() * $headerfont[2]) / $this->getScaleFactor(), 2);
    // set starting margin for text data cell
    if ($this->getRTL()) {
      $header_x = $ormargins['right'] + ($headerdata['logo_width'] * 1.1);
    } else {
      $header_x = $ormargins['left'] + ($headerdata['logo_width'] * 1.1);
    }
    $this->SetTextColor(0, 0, 0);
    // header title
    $this->SetFont($headerfont[0], 'B', $headerfont[2] + 1);
    $this->SetX($header_x);
    $this->Cell(0, $cell_height, $headerdata['author'], 0, 1, '', 0, '', 0);
    // header string
    $this->SetFont($headerfont[0], $headerfont[1], $headerfont[2]);
    $this->SetX($header_x);
    $this->MultiCell(0, $cell_height, $headerdata['string'], 0, '', 0, 1, '', '', true, 0, false);

    // my header title
    $this->SetFont($headerfont[0], 'B', $headerfont[2] + 4);
    $this->SetXY($header_x + 30,25);
    $this->MultiCell(0, $cell_height, $headerdata['title'], 0, '', 0, 1, '', '', true, 0, false);
    $this->SetLineStyle(array('width' => 0.85 / $this->getScaleFactor(), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
    $this->setY(32);
    $this->Cell(0, 0, '', 'T', 0, 'C');

    //$this->Cell(0, $cell_height, $headerdata['title'], 0, 1, '', 0, '', 0);
    $this->SetFont($headerfont[0], 'B', 8);
    $this->setXY(140,24);
    $this->Cell(20, 20, 'Desde: '.$this->desde.'   Hasta: '.$this->hasta);
    $this->setXY(16,28);
    $this->Cell(20, 20, 'Cliente');
    $this->Cell(18, 20, 'Fecha');
    $this->Cell(14, 20, 'Factura');
    $this->Cell(20, 20, 'Cód. Articulo');
    $this->Cell(52, 20, 'Nombre');
    $this->Cell(40, 20, 'Situación');

    // print an ending header line
    $this->SetLineStyle(array('width' => 0.85 / $this->getScaleFactor(), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
    $this->setY(42);
    $this->Cell(0, 0, '', 'T', 0, 'C');

  }


		/**
	 	 * Set header data.
		 * @param string $ln header image logo
		 * @param string $lw header image logo width in mm
		 * @param string $ht string to print as title on document header
		 * @param string $hs string to print on document header
		 * @access public
		 */
		public function setHeaderData($ln='', $lw=0, $ht='', $hs='', $a='') {
			$this->header_logo = $ln;
			$this->header_logo_width = 30;
			$this->header_title = 'INFORME DE SERVICIOS';
			$this->header_string = $hs;
      $this->author = $a;
		}

		/**
	 	 * Returns header data:
	 	 * <ul><li>$ret['logo'] = logo image</li><li>$ret['logo_width'] = width of the image logo in user units</li><li>$ret['title'] = header title</li><li>$ret['string'] = header description string</li></ul>
		 * @return array()
		 * @access public
		 * @since 4.0.012 (2008-07-24)
		 */
		public function getHeaderData() {
			$ret = array();
			$ret['logo'] = $this->header_logo;
			$ret['logo_width'] = $this->header_logo_width;
			$ret['title'] = $this->header_title;
			$ret['string'] = $this->header_string;
      $ret['author'] = $this->author;
			return $ret;
		}

    public function Body($desde, $hasta)
    {
      $this->desde = $desde;
      $this->hasta = $hasta;

      // init pdf doc
      $this->AliasNbPages();
      $this->SetMargins(15, 43, 10, true);
      $this->AddPage('P','A4');

      // Encabezado del detalle del reporte
      $servicios = Doctrine_Query::create()->from('Servicios')->where ('fecha >= ?', $desde)->addwhere('fecha <= ?', $hasta)->execute();
      if($servicios){
        $this->SetFont('helvetica', '', 7);
        foreach ($servicios as $servicio) {
          $y = $this->getY();
          $this->Cell(20, 4, $servicio->getCliente(),false);
          $this->Cell(20, 4, date('d/m/Y',strtotime($servicio->getFecha())),false);
          $this->Cell(12, 4, $servicio->getFactura(),false);
          $this->Cell(20, 4, $servicio->getArticulo(),false);
          $this->SetFont('helvetica', '', 6);
          $this->Cell(52, 4, $servicio->getNomart(),false);
          $this->SetFont('helvetica', '', 7);
          $this->MultiCell(60, 4, $servicio->getSituacion(),false);
        }
      }else{
        $this->Cell(20,10, 'Sin Datos Para Mostrar');
      }
    }


	function SetAligns($a='L')
	{
		//Set the array of column alignments
		if(!is_array($a))
		{
			$this->aligns=array();
			$this->aligns=array_pad($this->aligns,count($this->widths),$a);
		}
		else
		$this->aligns=$a;
	}

	function Row($data)
	{
		//Calculate the height of the row
		$nb=0;
		for($i=0;$i<count($data);$i++)
			$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
		$h=$this->jump*$nb;
		//Issue a page break first if needed
		$this->CheckPageBreak($h);
		//Draw the cells of the row
		for($i=0;$i<count($data);$i++)
		{
			$w=$this->widths[$i];
			$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
			//Save the current position
			$x=$this->GetX();
			$y=$this->GetY();
			//Draw the border
			if($this->border)
			{
				$this->Rect($x,$y,$w,$h,$this->mcfill);
			}
			//Print the text
			$this->MCPlus($w,$this->jump,$data[$i],0,$a);
			//Put the position to the right of the cell
			$this->SetXY($x+$w,$y);
		}
		//Go to the next line
		$this->Ln($h);
	}

	function RowM($data)
	{
    try{
      //Calculate the height of the row
      $nb=0;
      for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
      $h=$this->jump*$nb;
      //Issue a page break first if needed
      $this->CheckPageBreak($h);
      //Draw the cells of the row
      for($i=0;$i<count($data);$i++)
      {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        if($this->border)
        {
          $this->Rect($x,$y,$w,$h,$this->mcfill);
        }
        //Print the text
        $this->MultiCell($w,$this->jump,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
      }
      //Go to the next line
      $this->Ln($h);
    }catch(Exception $e){
      print $e->getMessage();
    }
	}

	function SetWidths($w)
	{
		//Set the array of column widths
		$this->widths=$w;
		//Set the borders for de table
		$this->border=false;
		$this->jump=6;
		$this->mcfill="D";

	}

	function  NbLines($w,$txt)
	{
		//Computes the number of lines a MultiCell of width w will take
		$cw=&$this->CurrentFont['cw'];
		if($w==0)
			$w=$this->w-$this->rMargin-$this->x;
		$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
		$s=str_replace("\r",'',$txt);
		$nb=strlen($s);
		if($nb>0 and $s[$nb-1]=="\n")
			$nb--;
		$sep=-1;
		$i=0;
		$j=0;
		$l=0;
		$nl=1;
		while($i<$nb)
		{
			$c=$s[$i];
			if($c=="\n")
			{
				$i++;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
				continue;
			}
			if($c==' ')
				$sep=$i;
			$l+=$cw[$c];
			if($l>$wmax)
			{
				if($sep==-1)
				{
					if($i==$j)
						$i++;
				}
				else
					$i=$sep+1;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
			}
			else
				$i++;
		}
		return $nl;
	}

}


?>
