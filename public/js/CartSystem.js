        /* initilizing Cart System */

        
        var db = new Dexie("cartItem_database");
        db.version(1).stores({
              cartItems: '++id, wor_list_id, price, name, pic, noofitem'
        });
        console.log("DB Created");



        db.cartItems.count(function(count){
            $("#cartValue").text(count);
        });


        //update row function
        function updateRow(wor_list_id,noofitem) {
            // update
            console.log("update:",wor_list_id,noofitem);
            db.cartItems.where("wor_list_id").anyOf(wor_list_id).modify({noofitem: noofitem}).then(function (updated) {
                if (updated){
                    db.cartItems.count(function(count){
                        $("#cartValue").text(count);
                    });
                    console.log ("updated");

                }
                else
                console.log ("Nothing was updated - there were no cartItem with primary key: "+wor_list_id);
            });  
            
            
        }
        
        
        
        function getTotal(){
            console.log("geting total");
            $totalPrice = 0 ;
            db.cartItems.each(function(cartItem){
                $totalPrice += cartItem.price * cartItem.noofitem;
                $('#total').text($totalPrice);
                console.log($totalPrice);
                return;
            });
            $('#total').text($totalPrice);
        }
        function decreaseVal(id){

            var itemCount = $('#itemCount'+id).text();
            itemCount = itemCount-1;

            console.log(itemCount);
            if(itemCount > 0){
                
                
                

                $('#itemCount'+id).text(itemCount);
                updateRow(id,itemCount);
                getTotal();
            }

        }

        function increaseVal(id){
            var itemCount = $('#itemCount'+id).text();
            itemCount = parseInt(itemCount)+1;

            $('#itemCount'+id).text(itemCount);
            updateRow(id,itemCount);
            getTotal();
        }




        // Insert row function
        function insertRow(wor_list_id,price,name,pic){
            console.log("inserting:"+wor_list_id+":"+price);
            //  insert data wor_list_id, price, noofitem
            db.cartItems.put({
                wor_list_id: wor_list_id,
                price: price,
                name:name,
                pic:pic,
                noofitem:1,
            }).then(function(){
                console.log("Row Inserted");
                db.cartItems.count(function(count){
                    $("#cartValue").text(count);
                });

            });
            
        }

        
            
        function changeView(id){

            var price = $('#price'+id).text();
            var name = $("#pname"+id).text();
            var pic = $("#ppic"+id).attr("srcOrginal");

            var total = $('#total').text();
            total = parseInt(price) + parseInt(total);
            $('#total').text(total);

            $('#cbtonview'+id).empty();
            $('#cbtonview'+id).append(
                '<button class="btn btn-primary" onclick="decreaseVal('+id+')" >-</button>'+
                '<span class="bton-item ml-2 mr-2" id="itemCount'+id+'">1</span>'+
                '<button class="btn btn-primary" onclick="increaseVal('+id+')" >+</button>'
            );
            console.log('view Changed');
            // inserting to DB
            insertRow(id,price,name,pic);
        }

        function deleteRow(wor_list_id) {
            // for delete
            db.cartItems
             .where("wor_list_id").anyOf(wor_list_id)
             .delete()
             .then(function (deleteCount) {
                console.log( "Deleted " + deleteCount + " objects");
                db.cartItems.count(function(count){
                    $("#cartValue").text(count);
                });  
                console.log("delteign and calling gettatlol");
                getTotal();
                noItemShow();
             }); 
            
        }

        function deleteRowNow($wor_list_id) {
            $("#rowListCartValue"+$wor_list_id).remove();
            deleteRow($wor_list_id);
        }
        

        //showing no item
        function noItemShow(){
            // console.log("in no item show");
            db.cartItems.count(function(count){
                //counting and comparing 
                console.log("Couting:",count);
                if(count == 0 ){
                
                    $("#ItemListcontainer").empty();
                    $("#ItemListcontainer").append('<div style="text-align: center;">No Item Found in Cart</div>');
    
                    $("#SaveItemList").hide();
                    $("#addressList").hide();
                    $("#paymentList").hide();
                }
            });
            
        }
        
        