
function showViewStock(){  
    $.ajax({
        url:"./adminView/viewCarStock.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function itemEditForm(id){
    $.ajax({
        url:"./adminView/editItemForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function updateItems(){
    var car_id = $('#car_id').val();
    var c_name = $('#c_name').val();
    var c_model = $('#c_model').val();
    var c_year = $('#c_year').val();
    var c_owner = $('#c_owner').val();
    var c_fueltype = $('#c_fueltype').val();
    var c_driven = $('#c_driven').val();
    var c_transmission = $('#c_transmission').val();
    var c_price = $('#c_price').val();
    var c_insurance = $('#c_insurance').val();
    var brand = $('#brand').val();
    var newImage = $('#newImage')[0].files[0];
    var upload=$('#upload').val();

    var fd = new FormData();
    fd.append('car_id', car_id);
    fd.append('c_name', c_name);
    fd.append('c_model', c_model);
    fd.append('c_year', c_year);
    fd.append('c_owner', c_owner);
    fd.append('c_fueltype', c_fueltype);
    fd.append('c_driven', c_driven);
    fd.append('c_transmission', c_transmission);
    fd.append('c_price', c_price);
    fd.append('c_insurance', c_insurance);
    fd.append('brand', brand);
    fd.append('newImage', newImage);
    fd.append('upload', upload);
    $.ajax({
      url:'./controller/updateItemController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Car Details Updated Successfully.');
        $('form').trigger('reset');
        showViewStock();
      }
    });
}

function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Car Items Successfully Deleted');
            $('form').trigger('reset');
            showViewStock();
        }
    });
}

function addItems(){
    var c_name=$('#c_name').val();
    var c_model=$('#c_model').val();
    var c_year=$('#c_year').val();
    var c_owner=$('#c_owner').val();
    var c_fueltype=$('#c_fueltype').val();
    var c_driven=$('#c_driven').val();
    var c_transmission=$('#c_transmission').val();
    var c_price=$('#c_price').val();
    var c_insurance=$('#c_insurance').val();
    var brand=$('#brand').val();
    var file=$('#file')[0].files[0];
    var upload=$('#upload').val();
    
    var fd = new FormData();
    fd.append('c_name', c_name);
    fd.append('c_model', c_model);
    fd.append('c_year', c_year);
    fd.append('c_owner', c_owner);
    fd.append('c_fueltype', c_fueltype);
    fd.append('c_driven', c_driven);
    fd.append('c_transmission', c_transmission);
    fd.append('c_price', c_price);
    fd.append('c_insurance', c_insurance);
    fd.append('brand', brand);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addItemController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Car Items Added Successfully.');
            $('form').trigger('reset');
            showViewStock();
        }
    });
}

function showBrand(){  
    $.ajax({
        url:"./adminView/viewBrands.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function BrandDelete(id){
    $.ajax({
        url:"./controller/brandDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Brand Successfully Deleted');
            $('form').trigger('reset');
            showBrand();
        }
    });
}

function addBrands(){
    var b_name=$('#b_name').val();
    var upload=$('#upload').val();

    var fd = new FormData();
    fd.append('b_name', b_name);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addBrandController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Car Brand Added Successfully.');
            $('form').trigger('reset');
            window.location.href = './index.php#carbrand';
            //showBrand();
        }
    });
}

function showCarImage(){  
    $.ajax({
        url:"./adminView/viewCarImage.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function carImageDelete(id){
    $.ajax({
        url:"./controller/deleteCarImageController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Car Images Successfully Deleted');
            $('form').trigger('reset');
            showCarImage();
        }
    });
}

function addCarImage(){
    var carid=$('#carid').val();
    var files1=$('#files1')[0].files[0];
    var files2=$('#files2')[0].files[0];
    var files3=$('#files3')[0].files[0];
    var files4=$('#files4')[0].files[0];
    var files5=$('#files5')[0].files[0];
    var files6=$('#files6')[0].files[0];
    var files7=$('#files7')[0].files[0];
    var files8=$('#files8')[0].files[0];
    var upload=$('#upload').val();

    var fd = new FormData();
    fd.append('carid', carid);
    fd.append('files1', files1);
    fd.append('files2', files2);
    fd.append('files3', files3);
    fd.append('files4', files4);
    fd.append('files5', files5);
    fd.append('files6', files6);
    fd.append('files7', files7);
    fd.append('files8', files8);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addCarImageController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Car Images Added Successfully.');
            $('form').trigger('reset');
            showCarImage();
        }
    });
}

function showSellYourCar(){  
    $.ajax({
        url:"./adminView/viewSellYourCar.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function sellCarDelete(id){
    $.ajax({
        url:"./controller/deleteSellerDetailsController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Seller Details Successfully Deleted');
            $('form').trigger('reset');
            showSellYourCar();
        }
    });
}

function showInterest(){
    $.ajax({
        url:"./adminView/viewShowInterest.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showInterestDelete(id){
    $.ajax({
        url:"./controller/deleteShowInterestController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Show Interest Deleted Successfully');
            $('form').trigger('reset');
            showInterest();
        }
    });
}

function showInsuranceGuide(){  
    $.ajax({
        url:"./adminView/viewInsuranceGuide.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function insuranceDelete(id){
    $.ajax({
        url:"./controller/deleteInsuranceController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Insurance Details Deleted Successfully');
            $('form').trigger('reset');
            showInsuranceGuide();
        }
    });
}

function showFinanceGuide(){  
    $.ajax({
        url:"./adminView/viewFinanceGuide.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function financeDelete(id){
    $.ajax({
        url:"./controller/deleteFinanceController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Finance Details Deleted Successfully');
            $('form').trigger('reset');
            showFinanceGuide();
        }
    });
}

function showRTOTransfer(){  
    $.ajax({
        url:"./adminView/viewRTOTransfer.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function rtoTransferDelete(id){
    $.ajax({
        url:"./controller/deleteRTOTransferController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('RTO Transfer Successfully Deleted');
            $('form').trigger('reset');
            showRTOTransfer();
        }
    });
}

function showMessageUs(){  
    $.ajax({
        url:"./adminView/viewMessageUs.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function messageUsDelete(id){
    $.ajax({
        url:"./controller/messageDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Message Details Deleted Successfully');
            $('form').trigger('reset');
            showMessageUs();
        }
    });
}

function showFeedback(){  
    $.ajax({
        url:"./adminView/viewFeedback.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function feedbackDelete(id){
    $.ajax({
        url:"./controller/feedbackDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Feedback Details Deleted Successfully');
            $('form').trigger('reset');
            showFeedback();
        }
    });
}