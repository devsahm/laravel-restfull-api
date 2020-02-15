<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="/send" method="post">
<select id="list" onChange="PopulateDropDownList()">
  <option value="NONE">SELECT NETWORK</option>
  <option value="MTN">MTN</option>
  <option value="GLO">GLO</option>
  <option value="AIRTEL">AIRTEL</option>
  <option value="9MOBILE">9MOBILE</option>
</select>
<!-- <input type="button" id="btnGenerate" value="Populate DropDownList" onclick="PopulateDropDownList()" />
 -->    <hr />
    <select id="DLState"></select>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script type="text/javascript">

function PopulateDropDownList(){
   $('#DLState').empty();

var ddl = document.getElementById("list");
 var selectedValue = ddl.options[ddl.selectedIndex].value;



if (selectedValue == "MTN"){
   var mtn = <?php echo json_encode($mtn); ?>;

       $(document).ready(function () {
         var listItems = '<option selected="selected" value="0">- Select -</option>';
 
      for (var i = 0; i < mtn.length; i++) {
             listItems += "<option value='" + mtn[i].DATA_PLAN + "'>" + mtn[i].AMOUNT + "</option>";
         }
 
         $("#DLState").html(listItems);
     });
}

if (selectedValue == "GLO"){
   var glo = <?php echo json_encode($glo); ?>;

       $(document).ready(function () {
         var listItems = '<option selected="selected" value="0">- Select -</option>';
 
      for (var i = 0; i < glo.length; i++) {
             listItems += "<option value='" + glo[i].DATA_PLAN + "'>" + glo[i].AMOUNT + "</option>";
         }
 
         $("#DLState").html(listItems);
     });
}

}
    </script>
    <input type="submit" name="">
    </form>

</body>
</html>