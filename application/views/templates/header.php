<html>
	<head>
		<title>FootballMarket</title>
		 <link href="https://bootswatch.com/4/spacelab/bootstrap.min.css" rel="stylesheet">
		 <link href="<?php echo site_url(); ?>assets/css/style.css" rel="stylesheet">

	</head>
	<body>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="<?php echo site_url(); ?>transfery">FootballMarket</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation" style="">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="navbar-collapse collapse show" id="navbarColor01" style="">
		    <ul class="navbar-nav mr-auto">
		      
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url(); ?>transfery">Transfery</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url(); ?>pilkarze">Piłkarze</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url(); ?>kluby">Kluby</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url(); ?>trenerzy">Trenerzy</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url(); ?>ligi">Ligi</a>
		      </li>
		       
			  
		    </ul>






		    <ul class="nav navbar-nav navbar-right">

		<?php if($this->session->userdata('logged_in')) : ?>

		    	<li class="nav-item dropdown">
			    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dodaj</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="<?php echo site_url(); ?>transfery/create">Transfer</a>
			      <a class="dropdown-item" href="<?php echo site_url(); ?>pilkarze/create">Piłkarz</a>
			      <a class="dropdown-item" href="<?php echo site_url(); ?>kluby/create">Klub</a>
			      <a class="dropdown-item" href="<?php echo site_url(); ?>trenerzy/create">Trener</a>
			      <a class="dropdown-item" href="<?php echo site_url(); ?>ligi/create">Liga</a>
			    </div>
			  </li>

			  <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url(); ?>users/logout">Wyloguj</a>
		      </li>

		<?php endif; ?>

		<?php if(!$this->session->userdata('logged_in')) : ?>

		    <li class="nav-item">
	        	<a class="nav-link" href="<?php echo site_url(); ?>users/login">Zaloguj</a>
	        </li>

		    <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url(); ?>users/register">Rejestracja</a>
		    </li>

		<?php endif; ?>
		  </ul>
		  </div>
		</nav>

		<div class="container">
<br>
		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('klub_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('klub_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('liga_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('liga_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('pilkarz_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('pilkarz_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('transfer_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('transfer_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('trener_created')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('trener_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('trener_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('trener_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('transfer_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('transfer_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('pilkarz_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('pilkarz_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('liga_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('liga_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('klub_deleted')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('klub_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
				<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>
		
		<?php if($this->session->flashdata('user_loggedout')): ?>
				<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>
		

			
