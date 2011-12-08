<?php


class PDFCertificado extends sfTCPDF {

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
  }

  public function MyHeader()
  {

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
			$this->header_logo_width = $lw;
			$this->header_title = $ht;
			$this->header_string = 'CONSTANCIA DE RECEPCIÓN DE EQUIPOS';
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

    public function Body($cedula, $factura, $fecha_factura, $nombre, $casa, $avenida, $urbanizacion, $ciudad, $distrito)
    {

      // init pdf doc
      $this->AliasNbPages();
      $this->AddPage('L','A4');
      $this->Ln(8);

      $this->setXY(15,35);
      $this->Cell(80, 0, "Cedula: $cedula");
      $this->setXY(15,40);
      $this->Cell(80, 0, "Factura: $factura");
      $this->setXY(15,45);
      $this->Cell(80, 0, "fecha factura: ".$fecha_factura['day'].'/'.$fecha_factura['month'].'/'.$fecha_factura['year']);
      $this->setXY(15,50);
      $this->Cell(80, 0, "nombre: $nombre");
      $this->setXY(15,55);
      $this->Cell(80, 0, "casa: $casa");
      $this->setXY(15,60);
      $this->Cell(80, 0, "avenida: $avenida");
      $this->setXY(15,65);
      $this->Cell(80, 0, "urbanizacion: $urbanizacion");
      $this->setXY(15,70);
      $this->Cell(80, 0, "ciudad: $ciudad");
      $this->setXY(15,75);
      $this->Cell(80, 0, "distrito: $distrito");

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

  public function Footer()
  {
  }
}


?>
