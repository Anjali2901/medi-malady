<?php


if(isset($_POST['submit'])) {

	$dbservername="localhost";
	$dbusername="root";
	$dbpassword="1234";
	$dbname="phpmyadmin";
	$conn=mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

	$des = $_POST['disease'];

	if(strcmp($des,"Maternal Disease")==0)
	{
		header("Location: ../maternal.php");
		exit();
	}
	elseif(strcmp($des,"Child Health")==0)
	{
		header("Location: ../child_health.php");
		exit();
	}
	elseif(strcmp($des,"HIV/AIDS")==0)
	{
		header("Location: ../hiv_aids.php");
		exit();
	}
	elseif(strcmp($des,"Tuberculosis")==0)
	{
		header("Location: ../tuberculosis.php");
		exit();
	}
	elseif(strcmp($des,"Malaria")==0)
	{
		header("Location: ../malaria.php");
		exit();
	}
	elseif(strcmp($des,"Cholera")==0)
	{
		header("Location: ../cholera.php");
		exit();
	}
	elseif(strcmp($des,"Influenza")==0)
	{
		header("Location: ../influenza.php");
		exit();
	}
	elseif(strcmp($des,"Arthritis")==0)
	{
		header("Location: ../arthritis.php");
		exit();
	}
	elseif(strcmp($des,"Allergy")==0)
	{
		header("Location: ../allergy.php");
		exit();
	}
	elseif(strcmp($des,"Meningitis")==0)
	{
		header("Location: ../meningitis.php");
		exit();
	}
	elseif(strcmp($des,"Sexually Transmitted Disease")==0)
	{
		header("Location: ../sexually_transmitted_disease.php");
		exit();
	}
	elseif(strcmp($des,"Alcohol Control")==0)
	{
		header("Location: ../alcohol_control.php");
		exit();
	}
	elseif(strcmp($des,"Liver Disease")==0)
	{
		header("Location: ../liver_disease.php");
		exit();
	}
	elseif(strcmp($des,"Water and Sanitation")==0)
	{
		header("Location: ../water_and_sanitation.php");
		exit();
	}
	elseif(strcmp($des,"Overweight")==0)
	{
		header("Location: ../overweight.php");
		exit();
	}
	elseif(strcmp($des,"Heart Disease")==0)
	{
		header("Location: ../heart_disease.php");
		exit();
	}
	elseif(strcmp($des,"Stroke")==0)
	{
		header("Location: ../stroke.php");
		exit();
	}
	elseif(strcmp($des,"Respiratory Infections")==0)
	{
		header("Location: ../respiratory_infections.php");
		exit();
	}
	elseif(strcmp($des,"Pulmonary Disease")==0)
	{
		header("Location: ../pulmonary_disease.php");
		exit();
	}
	elseif(strcmp($des,"Trachea, Bronchus and Lung Cancers")==0)
	{
		header("Location: ../trachea_bronchus_and_lung_cancers.php");
		exit();
	}
    elseif(strcmp($des,"Diabetes Mellitus")==0)
	{
		header("Location: ../diabetes_mellitus.php");
		exit();
	}
	elseif(strcmp($des,"Dehydration due to Diarrhea")==0)
	{
		header("Location: ../dehydration_due_to_diarrhea.php");
		exit();
	}
	elseif(strcmp($des,"Cirrhosis")==0)
	{
		header("Location: ../cirrhosis.php");
		exit();
	}


}


?>
