<style>
   .srch{
    margin-left: 430px;
    margin-bottom: :100px!important;
   } 

#sr{
    width: 600px;
    height: 50px;
}
/*.sr1{
margin-left: 600px;
margin-top: -500px!important;
}
*/
.sr1{
    margin-top:0px!important;
    float: right;
    position: absolute;
    margin-left:500px;
    height: 33px;
    margin-top: 2px;
   /* background: rgba(0,0,0, 0.0);
    border:1px solid #A25016;
    border-left:hidden;*/

}
.form-control{
    border-radius:1px;
    /*border-right: hidden;*/
    margin-left:50px;
    width: 450px;
/*    border:1px solid #A25016;*/
    
}
</style>  
<div class="row">
<div class="col-sm-4 col-md-offset-3">
<form action="{{'/search'}}" method="GET">
{{csrf_field()}}
<div id="sr">
{{-- <input type="submit"  class="sr1" class="lyphicon glyphicon-search"> --}}
<button type="submit" class="sr1" style="width: 70px; margin-top: 2px;color:#562E19; height:34px">
 <span class="glyphicon glyphicon-search"></span></button>                     
<input type="text" name="search" class="form-control" placeholder="Search Producds">
</div>
</form>