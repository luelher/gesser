/*!
 * Ext JS Library 3.2.1
 * Copyright(c) 2006-2010 Ext JS, Inc.
 * licensing@extjs.com
 * http://www.extjs.com/license
 */
Ext.onReady(function(){

    // create the Data Store
    var store = new Ext.data.JsonStore({
        root: 'rows',
        totalProperty: 'totalCount',
        idProperty: 'id',
        remoteSort: true,

        fields: [
            'codigo', 'descripcion', 'valor', 'id'
        ],

        // load using script tags for cross domain, if the data in on the same domain as
        // this page, an HttpProxy would be better
        proxy: new Ext.data.HttpProxy({
            url: 'catalog/data/class/prueba/method/data'
        })
    });
    store.setDefaultSort('codigo', 'desc');


    // pluggable renders
    function renderTopic(value){
        return String.format(
                '<b><a href="javascript:alert(\'Hola Mundo\')" target="_blank">{0}</a></b>',
                value);
    }
    function renderLast(value, p, r){
        return String.format('{0}<br/>by {1}', value.dateFormat('M j, Y, g:i a'), r.data['lastposter']);
    }

    var grid = new Ext.grid.GridPanel({
        width:580,
        height:305,
        title:'Catalogo de Datos',
        store: store,
        trackMouseOver:false,
        disableSelection:true,
        loadMask: true,

        // grid columns
        columns:[{
            header: "Código",
            dataIndex: 'codigo',
            render: renderTopic,
            width: 100,
            sortable: true
        },{
            header: "Descripción",
            dataIndex: 'descripcion',
            width: 200,
            sortable: true
        },{
            header: "Valor",
            dataIndex: 'valor',
            width: 70,
            align: 'right',
            sortable: true
        }],

//        // customize view config
//        viewConfig: {
//            forceFit:true,
//            enableRowBody:true,
//            showPreview:true,
//            getRowClass : function(record, rowIndex, p, store){
//                if(this.showPreview){
//                    p.body = '<p>'+record.data.descripcion+'</p>';
//                    return 'x-grid3-row-expanded';
//                }
//                return 'x-grid3-row-collapsed';
//            }
//        },

        // paging bar on the bottom
        bbar: new Ext.PagingToolbar({
            pageSize: 25,
            store: store,
            displayInfo: true,
            displayMsg: 'Mostrando {0} - {1} of {2}',
            emptyMsg: "Sin datos para mostrar",
            items:[
                '-']
        })
    });

    // render it
    grid.render('topic-grid');

    // trigger the data store load
    store.load({params:{start:0, limit:25}});
});
