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
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="/laporan-barang" class="">Barang</a></li>
									<li><a href="/laporan-ruangan" class="">Ruangan</a></li>
								</ul>
							</div>
						</li>
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