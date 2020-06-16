    <section class="content">
    	<div class="container-fluid">
    		<div class="block-header">
    			<h2>DASHBOARD</h2>
    		</div>
    		<!-- Widgets -->
    		<div class="row clearfix">
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    				<div class="info-box bg-pink hover-expand-effect">
    					<div class="icon">
    						<i class="material-icons">equalizer</i>
    					</div>
    					<div class="content">
    						<div class="text">TOTAL KELAS</div>
    						<div class="number count-to" data-from="0" data-to="<?= $total_kelas ?>" data-speed="15" data-fresh-interval="20"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    				<div class="info-box bg-cyan hover-expand-effect">
    					<div class="icon">
    						<i class="material-icons">face</i>
    					</div>
    					<div class="content">
    						<div class="text">TOTAL SISWA</div>
    						<div class="number count-to" data-from="0" data-to="<?= $total_user ?>" data-speed="1000" data-fresh-interval="20"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    				<div class="info-box bg-light-green hover-expand-effect">
    					<div class="icon">
    						<i class="material-icons">equalizer</i>
    					</div>
    					<div class="content">
    						<div class="text">TOTAL PENDAFTAR</div>
    						<div class="number count-to" data-from="0" data-to="<?= $total_pendaftar ?>" data-speed="1000" data-fresh-interval="20"></div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    				<div class="info-box bg-orange hover-expand-effect">
    					<div class="icon">
    						<i class="material-icons">equalizer</i>
    					</div>
    					<div class="content">
    						<div class="text">TOTAL ADMIN</div>
    						<div class="number count-to" data-from="0" data-to="<?= $total_admin ?>" data-speed="1000" data-fresh-interval="20"></div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- #END# Widgets -->

    	</div>
    </section>
