<h1>Edit Employee</h1>
<form method='post' action='' style="margin-left:20%;width:50%;height:40%">
    <div class="form-group">


        <label for="description">ContactID</label>
        <input type="text" class="form-control" id="ContactID" placeholder="Add ContactID" name="ContactID"
         value="<?php if(isset($employee->ContactID)) echo $employee->ContactID ?>">

         <label for="description">Contact Title</label>
        <input type="text" class="form-control" id="ContactTitle" placeholder="Add ContactTitle" name="ContactTitle"
         value="<?php if(isset($employee->ContactTitle)) echo $employee->ContactTitle ?>">

         <label for="description">FirstName</label>
        <input type="text" class="form-control" id="FirstName" placeholder="Add FirstName" name="FirstName"
         value="<?php if(isset($employee->FirstName)) echo $employee->FirstName ?>">

         <label for="description">LastName</label>
        <input type="text" class="form-control" id="LastName" placeholder="Add LastName" name="LastName"
         value="<?php if(isset($employee->LastName)) echo $employee->LastName ?>">

         <label for="description">EmailAddress</label>
        <input type="text" class="form-control" id="EmailAddress" placeholder="Add EmailAddress" name="EmailAddress"
         value="<?php if(isset($employee->EmailAddress)) echo $employee->EmailAddress ?>">
    
         <label for="title">EmployeeID</label>
        <input type="text" class="form-control" id="EmployeeID"  name="EmployeeID" 
        value="<?php if(isset($employee->EmployeeID)) echo $employee->EmployeeID ?>">

        <label for="description">NationalIDNumber</label>
        <input type="text" class="form-control" id="NationalIDNumber" placeholder="Add National IDNumber" name="NationalIDNumber" value="<?php if(isset($employee->NationalIDNumber)) echo $employee->NationalIDNumber?>">

        <label for="description">Title</label>
        <input type="text" class="form-control" id="EmployeeTitle" placeholder="Add EmployeeTitle" name="EmployeeTitle"
         value="<?php if(isset($employee->EmployeeTitle)) echo $employee->EmployeeTitle ?>">

        <label for="description">BirthDate</label>
        <input type="datetime-local" value="2018-06-12T19:30"
         class="form-control" id="BirthDate" placeholder="Add BirthDate" name="BirthDate" 
        value="<?php if(isset($employee->BirthDate)) echo $employee->BirthDate ?>" format="YYYY-MM-DD">

        <label for="description">Gender</label>
        <input type="text" class="form-control" id="Gender" placeholder="Add Gender" name="Gender" value="<?php if(isset($employee->Gender)) echo $employee->Gender ?>">

        <label for="description">HireDate</label>
        <input type="date" class="form-control" id="HireDate" placeholder="Add HireDate" name="HireDate" value="<?php if(isset($employee->HireDate)) echo $employee->HireDate ?>">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>