<!-- appointment item -->
<div id="appItem" class="mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--9-col mdl-grid">
	<div class="mdl-cell--9-col mdl-grid">
		<div class="section__text mdl-cell mdl-cell--4-col">
			<span style="font-size: large; ">หมายเลขนัด: </span>
		</div>
		<div class="section__text mdl-cell mdl-cell--6-col">
			<span id="appId" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">123-456-789</span>
		</div>
	</div>
	<br>
	<div class="mdl-cell--9-col mdl-grid">
		<div class="section__text mdl-cell mdl-cell--4-col">
			<span style="font-size: large; ">ผู้ป่วย: </span>
		</div>
		<div class="section__text mdl-cell mdl-cell--6-col">
			<span id="deptName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">DEPARTMENTNAME</span>
		</div>
	</div>
	<br>
	<div class="mdl-cell--9-col mdl-grid">
		<div class="section__text mdl-cell mdl-cell--4-col">
			<span style="font-size: large; ">แผนก: </span>
		</div>
		<div class="section__text mdl-cell mdl-cell--6-col">
			<span id="deptName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">DEPARTMENTNAME</span>
		</div>
	</div>
	<br>
	<div class="mdl-cell--9-col mdl-grid">
		<div class="section__text mdl-cell mdl-cell--4-col">
			<span style="font-size: large; ">แพทย์: </span>
		</div>
		<div class="section__text mdl-cell mdl-cell--6-col">
			<span id="docName" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">DOCNAME SURNAME</span>
		</div>
	</div>
	<br>
	<div class="mdl-cell--9-col mdl-grid">
		<div class="section__text mdl-cell mdl-cell--4-col">
			<span style="font-size: large; ">วัน: </span>
		</div>
		<div class="section__text mdl-cell mdl-cell--6-col">
			<span id="date" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">พุธที่ 25 พฤศจิกายน 2015</span>
		</div>
	</div>
	<br>
	<div class="mdl-cell--9-col mdl-grid">
		<div class="section__text mdl-cell mdl-cell--4-col">
			<span style="font-size: large; ">เวลา: </span>
		</div>
		<div class="section__text mdl-cell mdl-cell--6-col">
			<span id="time" class="mdl-color-text--primary" style="padding-left: 8px; font-size: large;">09.00 - 09.10 น.</span>
		</div>
	</div>
	<br>

	<div class="section__text mdl-cell mdl-cell--12-col">
		<center>
			<button onclick="editAppointment()" 
					class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"
					style="margin-right:10px;color:white;">
				แก้ไขนัด
			</button>
			<button onclick="cancleAppointment()" 
					class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
					style="color:white;"
				ยกเลิกนัด
			</button>
		</center>
	</div>
</div>