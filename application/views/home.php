<?php $this->load->view("partial/header"); ?>
<div id="panel">
				<div class="lefticon"><a href=<?php echo site_url("customers"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/customers.png';?> alt="customers" /> Customers - Add, Update, Delete, and Search customers </div>
				<div class="middleicon"><a href=<?php echo site_url("items"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/items.png';?> alt="items" /> Items - Add, Update, Delete, and Search items </div>
				<div class="righticon"><a href=<?php echo site_url("item_kits"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/item_kits.png';?> alt="item_kits" /> Item Kits - Add, Update, Delete and Search Item Kits </div>
				<div class="lefticon"><a href=<?php echo site_url("suppliers"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/suppliers.png';?> alt="suppliers" />Suppliers - Add, Update, Delete, and Search suppliers</div>
				<div class="middleicon"><a href=<?php echo site_url("employees"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/employees.png';?> alt="employees" />Employees - Add, Update, Delete, and Search employees </div>
				<div class="righticon"><a href=<?php echo site_url("sales"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/sales.png';?> alt="sales" width="48" height="48" />
Sales - Process sales and returns </div>
				<div class="lefticon"><a href=<?php echo site_url("reports"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/reports.png';?> alt="reports" />
Reports - View and generate reports </div>
				<div class="middleicon"><a href=<?php echo site_url("receivings"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/receivings.png';?> alt="receivings" />
Receivings - Process Purchase orders </div>
				<div class="righticon"><a href=<?php echo site_url("giftcards"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/giftcards.png';?> alt="gifts cards" />Gift Cards - Add, Update, Delete and Search gift cards </div>
				<div class="lefticon"><a href=<?php echo site_url("config"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/config.png';?> alt="config" />Store Config - Change the store's configuration </div>
				<div class="middleicon"><a href=<?php echo site_url("help"); ?> target="_new"><span class="linkspan"></span></a><img src=<?php echo base_url().'images/menubar/help.png';?> alt="help" />Help - Get support from trained professionals</div>
			</div>
            
<?php $this->load->view("partial/footer"); ?>