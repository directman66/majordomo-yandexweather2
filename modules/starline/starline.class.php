<div class="float-right">
	<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#about">About&nbsp;&nbsp;<span class="glyphicon glyphicon-info-sign icon-white"></span>
	</button>
</div>

<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="about1" aria-hidden="true">
<!-- <div id="about" class="modal hide"> -->
	<div class="modal-dialog">
		<div class="modal-content">


			<div class="modal-header">
				<button class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">https://livegpstracks.com/ [#VER#]</h4>
			</div>
			<div class="modal-body">
				<p> Модуль поддержки сервиса https://starline-online.ru </p>
				<p> Внимание, модуль сам создает класс starline-online и объекты в нем. </p>
				<p class="float-left"></p>
			</div>

			<div class="modal-body">

				<a href="http://majordomo.smartliving.ru/forum/" target="_blank">Forum</a>.<br>


				</p>

				<p class="float-left"></p>
			</div>
			
			<div class="modal-footer">
				<div class="pull-left">Best regards!<br>@S :)</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div>
<img src="../img/modules/starlinelogo2.png"  >
 &nbsp;&nbsp;<a class="btn btn-default" href="#" onClick="$('#api_settings').toggle();return false;"><#LANG_SETUP#></a>
 &nbsp;&nbsp;<a class="btn btn-default" href="?data_source=<#DATA_SOURCE#>&view_mode=login&tab=">LOGIN</a>
 &nbsp;&nbsp;<a class="btn btn-default" href="?data_source=<#DATA_SOURCE#>&view_mode=get&tab=">GET DATA</a>
 &nbsp;&nbsp;<a class="btn btn-default" href="?data_source=<#DATA_SOURCE#>&view_mode=startign&tab=">START IGN</a>
&nbsp;&nbsp;&nbsp;&nbsp;	
	[#if CYCLERUN==1#]
		<span class="label label-success" title="Статус цикла">Цикл запущен</span>
	[#else#]
		<span class="label label-danger" title="Статус цикла">Цикл остановлен</span>
	[#endif#]

 &nbsp; 
</div>

<div style="display:none" id='api_settings'>

&nbsp;
<form action="?" method="post" enctype="multipart/form-data" name="frmEdit" class="form-horizontal">
<fieldset>



<div class="form-group">
 <label class="control-label"[#if ERR_SERVER#] style="color:red;font-weight:bold"[#endif#]>LOGIN:<span style="color:blue">(*)</span></label>
 <div class="controls"><input type="text" name="starlinelogin" value="[#STARLINELOGIN#]" class="input"> 
<p class="text-muted"><br/>Логин на сайте телематики</p>   
 </div>
</div>

<div class="form-group">
 <label class="control-label"[#if ERR_PORT#] style="color:red;font-weight:bold"[#endif#]>PASSWORD:<span style="color:blue">(*)</span></label>
 <div class="controls"><input type="password" name="starlinepwd" value="[#STARLINEPWD#]" class="input">
   <p class="text-muted"><br/>Пароль на сайте телематики</p>
 </div>

	
</div>


<div class="form-group">
 <label class="control-label"[#if ERR_PORT#] style="color:red;font-weight:bold"[#endif#]>PASSWORD:<span style="color:blue">(*)</span></label>
 <div class="controls"><input type="text" name="starlinepwd" value="[#STARLINEPWD#]" class="input">
   <p class="text-muted"><br/>Пароль на сайте телематики</p>
 </div>
</div>



<div class="form-group">
 <label class="control-label"[#if ERR_API_MAC#] style="color:red;font-weight:bold"[#endif#]>SESID:<span style="color:blue">(*)</span></label>
 <div class="controls"><input type="text" size=100 name="starlinesesid" value="[#STARLINESESID#]" class="input">
   <p class="text-muted"><br/>ID сессии телематики</p>
 </div>
</div>

<div class="form-group">
 <label class="control-label"[#if ERR_API_MAC#] style="color:red;font-weight:bold"[#endif#]>TOKEN:<span style="color:blue">(*)</span></label>
 <div class="controls"><input type="text" size=100 name="starlinetoken" value="[#STARLINETOKEN#]" class="input">
   <p class="text-muted"><br/>Токен телематики</p>
 </div>
</div>



<div class="form-group">
 <label class="control-label"[#if ERR_API_MAC#] style="color:red;font-weight:bold"[#endif#]>COOKIES:</label>
  <p class="text-muted"><#STARLINECOOKIES#></p>
 </div>

<div class="form-group">
 <label class="control-label"[#if ERR_API_MAC#] style="color:red;font-weight:bold"[#endif#]>DEBUG:</label>
  <p class="text-muted"><#STARLINEDEBUG#></p>
 </div>


<div class="form-group">
 <label class="control-label">
 <#LANG_AUTO_UPDATE_PERIOD#>:(*)
 </label>
 <div class="controls">
		<select name="every" class="input span2">
			<option[#if EVERY="5"#] selected[#endif#]>5
			<option[#if EVERY="10"#] selected[#endif#]>10
			<option[#if EVERY="15"#] selected[#endif#]>15
			<option[#if EVERY="20"#] selected[#endif#]>20
			<option[#if EVERY="30"#] selected[#endif#]>30
			<option[#if EVERY="60"#] selected[#endif#]>60
		 </select> минут 
 </div>
</div>

<div class="form-actions">
<button type="submit" name="subm" value="Submit" class="btn btn-primary"><#LANG_UPDATE#></button>
<input type="hidden" name="view_mode" value="update_settings">
<input type="hidden" name="mode" value="update">
</div>
</fieldset>
</form>
</div>

<br/>

<ul class="nav nav-tabs">
	<li [#if TAB=="" || TAB=="indata" #] class="active" [#endif#]><a href="?data_source=<#DATA_SOURCE#>&view_mode=<#VIEW_MODE#>&id=<#ID#>&tab=indata">Device</a> </li>
	<li [#if TAB=="help" #] class="active" [#endif#]><a href="?tab=help">Help</a> </li>
</ul>


[#if TAB="indata" || TAB==""#] [#inc indata.html#] [#endif#] [#if TAB="help"#] [#inc help.html#] [#endif#]
