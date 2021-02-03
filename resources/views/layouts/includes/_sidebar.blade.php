<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if(auth()->user()->role == '1')
						<li><a href="/users" class=""><i class="lnr lnr-user"></i> <span>Users</span></a></li>
						@endif
						@if(auth()->user()->role == '2')
						<li><a href="/staff" class=""><i class="lnr lnr-user"></i> <span>Staff</span></a></li>
						@endif
						
						@if(auth()->user()->role == '2')
						<li><a href="/laporan" class=""><i class="lnr lnr-user"></i> <span>Laporan</span></a></li>
						@endif

						<li><a href="/barang" class=""><i class="lnr lnr-user"></i> <span>Barang</span></a></li>

						@if(auth()->user()->role == '1' ||auth()->user()->role == '2')
						<li><a href="/kategori" class=""><i class="lnr lnr-user"></i> <span>Kategori</span></a></li>
						@endif

						<li><a href="/ruangan" class=""><i class="lnr lnr-user"></i> <span>Ruangan</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>