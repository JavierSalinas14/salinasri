$('document').ready(function(){
    $.post('fetch.php', function(filter){
        $('#JsGrid').jsGrid({
            width: "100%", 
            height: "400px", 
            
            editing: true, 
            sorting: true,
            paging: true,
            pageIndex: 1, 
            pageSize: 10,  
            loadIndication: true,
            pageButtonCount: 5,
            confirmDeleting: true,
            deleteConfirm: "Esta seguro de querer eliminar el registro?",

            data: filter,

            /*
            controller:{
                loadData: function(filter){
                    return $.ajax({
                        type: "GET",
                        url: "fetch.php",
                        data: filter
                    });
                }
            },
            */

            fields: [
                        {
                            name: "id", 
                            type: "text", 
                            title: "ID", 
                            width: 20, 
                            align: "center",
                            validate:"requiered"
                        },
                        {
                            name:"Nombre", 
                            type:"text", 
                            title:"Nombre", 
                            width: 100
                        },
                        {
                            name:"Apellidopaterno", 
                            type:"text", 
                            title:"Apellido paterno", 
                            width:70
                        },
                        {
                            name:"Apellidomaterno", 
                            type:"text", 
                            title:"Apellido materno", 
                            width:70
                        },
                        {
                            name:"Dorsal", 
                            type:"number", 
                            title:"Dorsal", 
                            width:20,
                            align:"center"
                        },
                        {
                            name:"Posicion", 
                            type:"text", 
                            title:"Posicion", 
                            align:"center",
                            width:50
                        },
                        {
                            type:"control"
                        }
                    ]
        });
    },'json');
});