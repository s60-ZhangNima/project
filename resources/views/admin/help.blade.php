@extends('mmm\admin')
@section('content')
<div class="span9">
					<h1>
						Help
					</h1>
					<div class="hero-unit">
						<h1>
							Help
						</h1>
						<p>
							Find all our help and tours below.
						</p>
						<div class="row">
						<div class="span2">
							<ul>
								<li><a href="help-inner.blade.php">Dashboard</a></li>
								<li><a href="help-inner.blade.php">Projects</a></li>
								<li><a href="help-inner.blade.php">Tasks</a></li>
							</ul>
						</div>
						<div class="span2">
							<ul>
								<li><a href="help-inner.blade.php">Messages</a></li>
								<li><a href="help-inner.blade.php">Files</a></li>
								<li><a href="help-inner.blade.php">Activity</a></li>
							</ul>
						</div>
						<div class="span2">
							<ul>
								<li><a href="help-inner.blade.php">Profile</a></li>
								<li><a href="help-inner.blade.php">Settings</a></li>
								<li><a href="help-inner.blade.php">Tours</a></li>
							</ul>
						</div>
						</div>
					</div>

					<h2>
						Recently Added Help
					</h2>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									Name
								</th>
								<th>
									Date
								</th>
								<th>
									View
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Dashboard
								</td>
								<td>
									4 days ago
								</td>
								<td>
									<a href="help-inner.blade.php" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Tasks
								</td>
								<td>
									5 days ago
								</td>
								<td>
									<a href="help-inner.blade.php" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Activity
								</td>
								<td>
									5 days ago
								</td>
								<td>
									<a href="help-inner.blade.php" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Introduction Tour
								</td>
								<td>
									6 days ago
								</td>
								<td>
									<a href="help-inner.blade.php" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Project Organisation
								</td>
								<td>
									9 days ago
								</td>
								<td>
									<a href="help-inner.blade.php" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									How to upload multiple files
								</td>
								<td>
									16 days ago
								</td>
								<td>
									<a href="help-inner.blade.php" class="view-link">View</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
	@endsection
