<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Website Daily Habits</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('ass/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ass/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('ass/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('ass/assets/css/style.css') }}" rel="stylesheet">

    <style>
        .task-table, .total-summary-table {
            width: 100%;
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }

        .task-table th, .task-table td, .total-summary-table th, .total-summary-table td {
            text-align: center;
        }

        .progress {
            height: 20px;
        }
    </style>
</head>

<body>
    @include('layouts.front.navbar')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Tandai Habits Mu Disini</h1>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container">
        <table class="table table-bordered task-table">
            <thead class="thead-light">
                <tr>
                    <th colspan="7" class="text-center">
                        <h5>Silahkan Tandai Habits Anda di Bawah Ini!</h5>
                    </th>
                </tr>
                <tr>
                    <th>Date</th>
                    <th><i class="fas fa-running"></i></th>
                    <th><i class="bi bi-journal"></i></th>
                    <th><i class="fa fa-book"></i></th>
                    <th><i class="bi bi-droplet"></i></th>
                    <th><i class="bi bi-moon"></i></th>
                    <th>Day Score</th>
                </tr>
            </thead>
            <tbody>
                <!-- Additional rows can be added dynamically -->
            </tbody>
        </table>
        <div class="add-row mb-3">
            <button class="btn btn-primary" id="addRowBtn">+ New</button>
            <button class="btn btn-secondary" id="refreshTableBtn">Refresh</button>
        </div>
        <div class="submit-habits">
            <button class="btn btn-success" id="submitHabitsBtn">Submit</button>
        </div>

        <!-- Total Summary Table -->
        <table class="table table-bordered total-summary-table">
            <thead class="thead-light">
                <tr>
                    <th>Habit</th>
                    <th>Total Days</th>
                    <th>Days Completed</th>
                    <th>Completion Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Olahraga</td>
                    <td id="totalDaysRunning">0</td>
                    <td id="daysCompletedRunning">0</td>
                    <td id="completionRateRunning">0%</td>
                </tr>
                <tr>
                    <td>belajar</td>
                    <td id="totalDaysJournaling">0</td>
                    <td id="daysCompletedJournaling">0</td>
                    <td id="completionRateJournaling">0%</td>
                </tr>
                <tr>
                    <td>membaca jurnal</td>
                    <td id="totalDaysReading">0</td>
                    <td id="daysCompletedReading">0</td>
                    <td id="completionRateReading">0%</td>
                </tr>
                <tr>
                    <td>minum air</td>
                    <td id="totalDaysWater">0</td>
                    <td id="daysCompletedWater">0</td>
                    <td id="completionRateWater">0%</td>
                </tr>
                <tr>
                    <td>tidur</td>
                    <td id="totalDaysSleep">0</td>
                    <td id="daysCompletedSleep">0</td>
                    <td id="completionRateSleep">0%</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Newsletter Start -->
    <div class="container-fluid newsletter bg-primary py-5 my-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3"><span class="fw-light text-dark">Welcome to </span>Daily Habits</h1>
                <p class="text-white mb-4">Silahkan kunjungi jika ada hal-hal yang mau ditanyakan.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control w-100 py-4 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-white fs-4"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Footer -->
    @include('layouts.front.footer')
    <!-- /Footer -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ass/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('ass/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('ass/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('ass/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('ass/assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const taskTableBody = document.querySelector('.task-table tbody');
            const addRowBtn = document.getElementById('addRowBtn');
            const submitHabitsBtn = document.getElementById('submitHabitsBtn');
            const refreshTableBtn = document.getElementById('refreshTableBtn');
            const daysOfWeek = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            let startDate = new Date();
            let currentDayIndex = startDate.getDay();

            // Load stored tasks
            loadStoredTasks();

            addRowBtn.addEventListener('click', addNewRow);
            submitHabitsBtn.addEventListener('click', submitHabits);
            refreshTableBtn.addEventListener('click', refreshTable);

            function addNewRow() {
                const newRow = document.createElement('tr');
                const dayName = daysOfWeek[currentDayIndex];
                const formattedDate = formatDate(startDate);

                newRow.innerHTML = `
                    <td>${dayName}, ${formattedDate}</td>
                    <td><input type="checkbox" class="running-checkbox"></td>
                    <td><input type="checkbox" class="journaling-checkbox"></td>
                    <td><input type="checkbox" class="reading-checkbox"></td>
                    <td><input type="checkbox" class="water-checkbox"></td>
                    <td><input type="checkbox" class="sleep-checkbox"></td>
                    <td class="day-score">0</td>
                `;
                
                taskTableBody.appendChild(newRow);
                startDate.setDate(startDate.getDate() + 1);
                currentDayIndex = (currentDayIndex + 1) % 7;
            }

            function formatDate(date) {
                const options = { day: '2-digit', month: '2-digit', year: 'numeric' };
                return date.toLocaleDateString('id-ID', options);
            }

            function submitHabits() {
                const rows = taskTableBody.querySelectorAll('tr');
                const habitData = [];
                rows.forEach(row => {
                    const date = row.children[0].textContent;
                    const running = row.children[1].children[0].checked;
                    const journaling = row.children[2].children[0].checked;
                    const reading = row.children[3].children[0].checked;
                    const water = row.children[4].children[0].checked;
                    const sleep = row.children[5].children[0].checked;
                    const dayScore = calculateDayScore(running, journaling, reading, water, sleep);
                    row.children[6].textContent = dayScore;
                    habitData.push({ date, running, journaling, reading, water, sleep, dayScore });
                });

                localStorage.setItem('habitData', JSON.stringify(habitData));
                calculateTotals();
            }

            function calculateDayScore(running, journaling, reading, water, sleep) {
                return [running, journaling, reading, water, sleep].filter(Boolean).length;
            }

            function calculateTotals() {
                const habitData = JSON.parse(localStorage.getItem('habitData')) || [];
                let totalDays = habitData.length;
                let runningCompleted = 0;
                let journalingCompleted = 0;
                let readingCompleted = 0;
                let waterCompleted = 0;
                let sleepCompleted = 0;

                habitData.forEach(day => {
                    if (day.running) runningCompleted++;
                    if (day.journaling) journalingCompleted++;
                    if (day.reading) readingCompleted++;
                    if (day.water) waterCompleted++;
                    if (day.sleep) sleepCompleted++;
                });

                document.getElementById('totalDaysRunning').textContent = totalDays;
                document.getElementById('daysCompletedRunning').textContent = runningCompleted;
                document.getElementById('completionRateRunning').textContent = ((runningCompleted / totalDays) * 100).toFixed(2) + '%';

                document.getElementById('totalDaysJournaling').textContent = totalDays;
                document.getElementById('daysCompletedJournaling').textContent = journalingCompleted;
                document.getElementById('completionRateJournaling').textContent = ((journalingCompleted / totalDays) * 100).toFixed(2) + '%';

                document.getElementById('totalDaysReading').textContent = totalDays;
                document.getElementById('daysCompletedReading').textContent = readingCompleted;
                document.getElementById('completionRateReading').textContent = ((readingCompleted / totalDays) * 100).toFixed(2) + '%';

                document.getElementById('totalDaysWater').textContent = totalDays;
                document.getElementById('daysCompletedWater').textContent = waterCompleted;
                document.getElementById('completionRateWater').textContent = ((waterCompleted / totalDays) * 100).toFixed(2) + '%';

                document.getElementById('totalDaysSleep').textContent = totalDays;
                document.getElementById('daysCompletedSleep').textContent = sleepCompleted;
                document.getElementById('completionRateSleep').textContent = ((sleepCompleted / totalDays) * 100).toFixed(2) + '%';
            }

            function loadStoredTasks() {
                const habitData = JSON.parse(localStorage.getItem('habitData')) || [];
                habitData.forEach(task => {
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${task.date}</td>
                        <td><input type="checkbox" class="running-checkbox" ${task.running ? 'checked' : ''}></td>
                        <td><input type="checkbox" class="journaling-checkbox" ${task.journaling ? 'checked' : ''}></td>
                        <td><input type="checkbox" class="reading-checkbox" ${task.reading ? 'checked' : ''}></td>
                        <td><input type="checkbox" class="water-checkbox" ${task.water ? 'checked' : ''}></td>
                        <td><input type="checkbox" class="sleep-checkbox" ${task.sleep ? 'checked' : ''}></td>
                        <td class="day-score">${task.dayScore}</td>
                    `;
                    taskTableBody.appendChild(newRow);
                });
                calculateTotals();
            }

            function refreshTable() {
                taskTableBody.innerHTML = '';
                localStorage.removeItem('habitData');
                startDate = new Date();
                currentDayIndex = startDate.getDay();
                calculateTotals();
            }
        });
    </script>
</body>

</html>
