<div id="reg_patient">
	<h1>Новый пациент</h1>
	<form method="post" id="new_patient">
	    <div class="field_area">
	        <label for="patient_name">Имя</label>
	        <input type="text" id="patient_name" name="patient_name" class="field">
	    </div>
	    <div class="field_area">
	        <label for="pers_numb">Номер полиса</label>
	        <input type="text" id="pers_numb" name="pers_numb" class="field">
	    </div>
	    <div class="field_area">
	        <label for="birth">Дата рождения</label>
	        <input type="date" id="birth" name="birth" class="field">
	    </div>
	    <div class="field_area">
	        <h3 style="color:blue">Пол</h3>
            <input type="radio" name="sex" value="1" id="sex1">
            <label for="sex1" class="inline">мужской</label>
            <input type="radio" name="sex" value="2" id="sex2">
            <label for="sex2" class="inline">женский</label>
	    </div>
	    <div class="field_area">
	        <input type="submit" name="save" value="внести запись" class="field">
	    </div>
	</form>
</div>