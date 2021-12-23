<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("_partials/head.php") ?>

<body class="nav-fixed">

	<!-- Topbar -->
	<?php $this->load->view("_partials/topbar.php") ?>

	<div id="layoutSidenav">

		<!-- Sidebar -->
		<?php $this->load->view("_partials/sidebar.php") ?>
		<div id="layoutSidenav_content">
			<main>

				<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
					<div class="container-fluid">
						<div class="page-header-content">
							<h1 class="page-header-title">
								<div class="page-header-icon">
									<i data-feather="activity"></i>
								</div>
								<span>Dashboard</span>
							</h1>
							<div class="page-header-subtitle">Website Graph</div>
						</div>
					</div>
				</div>

				<div class="container mt-n10">

					
						<div class="d-flex justify-content-between alert alert-success alert-dismissible fade show mt-5" role="alert">
							<div class="col-lg-12 md-6 ">
								<div class="align-items-center">
									<p><strong>Pemberitahuan!</strong> Terdapat <strong>5</strong> Pengajuan Pindah Penduduk Perlu Konfirmasi.</p>
								</div>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>

								<a href="<?= base_url('admin/Transaksi') ?>" class="btn btn-primary btn-sm align-items-center">Lihat Pesanan</a>
							</div>
						</div>

					<div class="row">
						<div class="col-xxl-3 col-lg-4">
							<div class="card bg-success text-white mb-4">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-3">
											<div class="text-white-75 small">Jumlah Penduduk Total</div>
											<div class="text-lg font-weight-bold">5</div>
										</div>
										<i class="feather-xl text-white-50" data-feather="activity"></i>
									</div>
								</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="<?= base_url('admin/Transaksi') ?>">Lihat Detail</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>

						<div class="col-xxl-3 col-lg-4">
							<div class="card bg-primary text-white mb-4">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-3">
											<div class="text-white-75 small">Jumlah Penduduk Masuk</div>
											<div class="text-lg font-weight-bold">5</div>
										</div>
										<i class="feather-xl text-white-50" data-feather="activity"></i>
									</div>
								</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="<?= base_url('admin/Transaksi/dikemas') ?>">Lihat Detail</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-lg-4">
							<div class="card bg-warning text-white mb-4">
								<div class="card-body">
									<div class="d-flex justify-content-between align-items-center">
										<div class="mr-3">
											<div class="text-white-75 small">Jumlah Penduduk Keluar</div>
											<div class="text-lg font-weight-bold">5</div>
										</div>
										<i class="feather-xl text-white-50" data-feather="activity"></i>
									</div>
								</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="<?= base_url('admin/Transaksi/selesai') ?>">Lihat Detail</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<!-- Footer -->
			<?php $this->load->view("_partials/footer.php") ?>

		</div>
	</div>

	<!-- JS -->
	<?php $this->load->view("_partials/js.php") ?>

</body>

<script>
	(Chart.defaults.global.defaultFontFamily = "Metropolis"),
	'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
	Chart.defaults.global.defaultFontColor = "#858796";

	var ctx = document.getElementById("website_visitor");
	var cData = JSON.parse(`<?php echo $grafik; ?>`);
	var myLineChart = new Chart(ctx, {
		type: "line",
		data: {
			// labels: [
			// 	"Januari",
			// 	"Februari",
			// 	"Maret",
			// 	"April",
			// 	"Mei",
			// 	"Juni",
			// 	"Juli",
			// 	"Agustus",
			// 	"September",
			// 	"Oktober",
			// 	"November",
			// 	"Desember"
			// ],
			labels: cData.tanggal,
			datasets: [{
				label: "Pengunjung ",
				lineTension: 0.3,
				backgroundColor: "rgba(0, 97, 242, 0.05)",
				borderColor: "rgba(0, 97, 242, 1)",
				pointRadius: 3,
				pointBackgroundColor: "rgba(0, 97, 242, 1)",
				pointBorderColor: "rgba(0, 97, 242, 1)",
				pointHoverRadius: 3,
				pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
				pointHoverBorderColor: "rgba(0, 97, 242, 1)",
				pointHitRadius: 10,
				pointBorderWidth: 2,
				// data: [
				// 	0,
				// 	10,
				// 	5,
				// 	15,
				// 	10,
				// 	20,
				// 	15,
				// 	25,
				// 	20,
				// 	30,
				// 	25,
				// 	40
				// ]
				data: cData.jumlah
			}]
		},
		options: {
			maintainAspectRatio: false,
			layout: {
				padding: {
					left: 10,
					right: 25,
					top: 25,
					bottom: 0
				}
			},
			scales: {
				xAxes: [{
					time: {
						unit: "date"
					},
					gridLines: {
						display: false,
						drawBorder: false
					},
					ticks: {
						maxTicksLimit: 7
					}
				}],
				yAxes: [{
					ticks: {
						maxTicksLimit: 5,
						padding: 10,
						callback: function(value, index, values) {
							return number_format(value);
						}
					},
					gridLines: {
						color: "rgb(234, 236, 244)",
						zeroLineColor: "rgb(234, 236, 244)",
						drawBorder: false,
						borderDash: [2],
						zeroLineBorderDash: [2]
					}
				}]
			},
			legend: {
				display: false
			},
			tooltips: {
				backgroundColor: "rgb(255,255,255)",
				bodyFontColor: "#858796",
				titleMarginBottom: 10,
				titleFontColor: "#6e707e",
				titleFontSize: 14,
				borderColor: "#dddfeb",
				borderWidth: 1,
				xPadding: 15,
				yPadding: 15,
				displayColors: false,
				intersect: false,
				mode: "index",
				caretPadding: 10,
				callbacks: {
					label: function(tooltipItem, chart) {
						var datasetLabel =
							chart.datasets[tooltipItem.datasetIndex].label || "";
						return datasetLabel + number_format(tooltipItem.yLabel);
					}
				}
			}
		}
	});



	// START 36
	var produk1 = document.getElementById("produk1").value;
	var produk2 = document.getElementById("produk2").value;
	var produk3 = document.getElementById("produk3").value;
	var produk4 = document.getElementById("produk4").value;
	var produk5 = document.getElementById("produk5").value;
	var produk6 = document.getElementById("produk6").value;
	var produk7 = document.getElementById("produk7").value;
	var produk8 = document.getElementById("produk8").value;
	var produk9 = document.getElementById("produk9").value;
	var produk10 = document.getElementById("produk10").value;

	var namaproduk1 = document.getElementById("namaproduk1").value;
	var namaproduk2 = document.getElementById("namaproduk2").value;
	var namaproduk3 = document.getElementById("namaproduk3").value;
	var namaproduk4 = document.getElementById("namaproduk4").value;
	var namaproduk5 = document.getElementById("namaproduk5").value;
	var namaproduk6 = document.getElementById("namaproduk6").value;
	var namaproduk7 = document.getElementById("namaproduk7").value;
	var namaproduk8 = document.getElementById("namaproduk8").value;
	var namaproduk9 = document.getElementById("namaproduk9").value;
	var namaproduk10 = document.getElementById("namaproduk10").value;
	var ctx = document.getElementById("36");
	var myPieChart = new Chart(ctx, {
		type: "doughnut",
		data: {
			labels: [namaproduk1, namaproduk2, namaproduk3, namaproduk4, namaproduk5, namaproduk6, namaproduk7, namaproduk8, namaproduk9, namaproduk10],
			datasets: [{
				data: [produk1, produk2, produk3, produk4, produk5, produk6, produk7, produk8, produk9, produk10],
				backgroundColor: [
					"rgba(0, 97, 242, 1)",
					"rgba(0, 172, 105, 1)",
					"rgb(158, 156, 13)",
					"rgb(163, 18, 161)",
					"rgb(237, 0, 0)",
					"rgb(189, 123, 25)",
					"rgb(184, 22, 68)",
					"rgb(29, 204, 146)",
					"rgb(130, 74, 194)",
					"rgb(240, 208, 103)",
				],
			}]
		},
		options: {
			resizeable: true,
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				enabled: false,
			},
			legend: {
				display: false
			},
			zoomOutPercentage: 100,
			layout: {
				padding: {
					left: 10,
					right: 10,
					top: 70,
					bottom: 50
				}
			},
			plugins: {
				datalabels: {
					formatter: (value, ctx) => {
						let sum = 0;
						let dataArr = ctx.chart.data.datasets[0].data;
						dataArr.map(data => {
							sum += data;
						});
						let percentage = (value * 100 / sum).toFixed(2) + "%";
						return percentage;
					},
					color: '#fff',
				},
				legend: false,
				outlabels: {
					text: '%l %p',
					color: 'white',
					stretch: 15,
					font: {
						resizable: true,
						minSize: 12,
						maxSize: 16
					}
				}
			},
			cutoutPercentage: 0
		}
	});
	// END 36

	// START 40
	var data40tersedia = document.getElementById("inp40tersedia").value;
	var data40terbooking = document.getElementById("inp40terbooking").value;
	var data40terjual = document.getElementById("inp40terjual").value;
	var ctx = document.getElementById("40");
	var myPieChart = new Chart(ctx, {
		type: "doughnut",
		data: {
			labels: ["Tersedia", "Booking", "Terjual"],
			datasets: [{
				data: [data40tersedia, data40terbooking, data40terjual],
				backgroundColor: [
					"rgba(0, 97, 242, 1)",
					"rgba(0, 172, 105, 1)",
					"rgba(88, 0, 232, 1)"
				],
			}]
		},
		options: {
			resizeable: true,
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				enabled: false,
			},
			legend: {
				display: false
			},
			zoomOutPercentage: 100,
			layout: {
				padding: {
					left: 10,
					right: 10,
					top: 70,
					bottom: 50
				}
			},
			plugins: {
				datalabels: {
					formatter: (value, ctx) => {
						let sum = 0;
						let dataArr = ctx.chart.data.datasets[0].data;
						dataArr.map(data => {
							sum += data;
						});
						let percentage = (value * 100 / sum).toFixed(2) + "%";
						return percentage;
					},
					color: '#fff',
				},
				legend: false,
				outlabels: {
					text: '%l %p',
					color: 'white',
					stretch: 15,
					font: {
						resizable: true,
						minSize: 12,
						maxSize: 16
					}
				}
			},
			cutoutPercentage: 0
		}
	});
	// END 40

	// END 45
	var data45tersedia = document.getElementById("inp45tersedia").value;
	var data45terbooking = document.getElementById("inp45terbooking").value;
	var data45terjual = document.getElementById("inp45terjual").value;
	var ctx = document.getElementById("45");
	var myPieChart = new Chart(ctx, {
		type: "doughnut",
		data: {
			labels: ["Tersedia", "Booking", "Terjual"],
			datasets: [{
				data: [data45tersedia, data45terbooking, data45terjual],
				backgroundColor: [
					"rgba(0, 97, 242, 1)",
					"rgba(0, 172, 105, 1)",
					"rgba(88, 0, 232, 1)"
				],
			}]
		},
		options: {
			resizeable: true,
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				enabled: false,
			},
			legend: {
				display: false
			},
			zoomOutPercentage: 100,
			layout: {
				padding: {
					left: 10,
					right: 10,
					top: 70,
					bottom: 50
				}
			},
			plugins: {
				datalabels: {
					formatter: (value, ctx) => {
						let sum = 0;
						let dataArr = ctx.chart.data.datasets[0].data;
						dataArr.map(data => {
							sum += data;
						});
						let percentage = (value * 100 / sum).toFixed(2) + "%";
						return percentage;
					},
					color: '#fff',
				},
				legend: false,
				outlabels: {
					text: '%l %p',
					color: 'white',
					stretch: 15,
					font: {
						resizable: true,
						minSize: 12,
						maxSize: 16
					}
				}
			},
			cutoutPercentage: 0
		}
	});
	// END 45

	// START RUKO
	var dataRukotersedia = document.getElementById("inpRukotersedia").value;
	var dataRukoterbooking = document.getElementById("inpRukoterbooking").value;
	var dataRukoterjual = document.getElementById("inpRukoterjual").value;
	var ctx = document.getElementById("Ruko");
	var myPieChart = new Chart(ctx, {
		type: "doughnut",
		data: {
			labels: ["Tersedia", "Booking", "Terjual"],
			datasets: [{
				data: [dataRukotersedia, dataRukoterbooking, dataRukoterjual],
				backgroundColor: [
					"rgba(0, 97, 242, 1)",
					"rgba(0, 172, 105, 1)",
					"rgba(88, 0, 232, 1)"
				],
			}]
		},
		options: {
			resizeable: true,
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				enabled: false,
			},
			legend: {
				display: false
			},
			zoomOutPercentage: 100,
			layout: {
				padding: {
					left: 10,
					right: 10,
					top: 70,
					bottom: 50
				}
			},
			plugins: {
				datalabels: {
					formatter: (value, ctx) => {
						let sum = 0;
						let dataArr = ctx.chart.data.datasets[0].data;
						dataArr.map(data => {
							sum += data;
						});
						let percentage = (value * 100 / sum).toFixed(2) + "%";
						return percentage;
					},
					color: '#fff',
				},
				legend: false,
				outlabels: {
					text: '%l %p',
					color: 'white',
					stretch: 15,
					font: {
						resizable: true,
						minSize: 12,
						maxSize: 16
					}
				}
			},
			cutoutPercentage: 0
		}
	});
	// END RUKO 
</script>

</html>