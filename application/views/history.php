<html>

<head>
    <title>GrabTutor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="../../assets/css/history.css">
    <link rel="stylesheet" href="../../assets/css/fonts.css">
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-3.1.1.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
</head>

<script>
    $(document).ready(function () {

        var username = "<?= $_SESSION['UNAME'] ?>";

        console.log(username);
        $.ajax({
            url: "<?= base_url('history/retrieveHistory')?>",
            type: 'GET',
            dataType: 'json',
            data: {
                username: username
            }
        }).done(function(result){

            $("#historyTable").append("<thead>" +
                                        "<tr>"+
                                        "<th>Subject</th>" +
                                        "<th>Tutor</th>" +
                                        "<th>Tutee</th>" +
                                        "<th>Start Date</th>" +
                                        "<th>End Date</th>" +
                                        "</tr>"+
                                        "</thead>" +
                                        "<tbody>");

            for (var i = 0; i < result['history'].length; i++ ) {
                console.log(result['history'][i]);

                $("#historyTable").append("<tr>" +
                                            "<td>" + result['history'][i].sub_name + "</td>" +
                                            "<td>" + result['history'][i].tutor_name + "</td>" +
                                            "<td>" + result['history'][i].tutee_name + "</td>" +
                                            "<td>" + result['history'][i].date_start + "</td>" +
                                            "<td>" + result['history'][i].date_end + "</td>");
                $("#historyTable").append("</tr>");
            }

            $("#historyTable").append("</tbody>");

        });

    });

    function filterYear (year) {
        $("#historyTable").empty();

        var username = "<?= $_SESSION['UNAME'] ?>";

        console.log(username);

        $.ajax({
            url: "<?= base_url('history/retrieveHistoryYearFilter')?>",
            type: 'GET',
            dataType: 'json',
            data: {
                username: username,
                year: year
            }
        }).done(function(result){

            $("#historyTable").append("<thead>" +
                "<tr>"+
                "<th>Subject</th>" +
                "<th>Tutor</th>" +
                "<th>Tutee</th>" +
                "<th>Start Date</th>" +
                "<th>End Date</th>" +
                "</tr>"+
                "</thead>" +
                "<tbody>");

            for (var i = 0; i < result['history'].length; i++ ) {
                console.log(result['history'][i]);

                $("#historyTable").append("<tr>" +
                    "<td>" + result['history'][i].sub_name + "</td>" +
                    "<td>" + result['history'][i].tutor_name + "</td>" +
                    "<td>" + result['history'][i].tutee_name + "</td>" +
                    "<td>" + result['history'][i].date_start + "</td>" +
                    "<td>" + result['history'][i].date_end + "</td>");
                $("#historyTable").append("</tr>");
            }

            $("#historyTable").append("</tbody>");

        }).fail(function() {
            console.log("fail");
        });
    }
</script>

<body>
<div class = "container" id = "_top">
    <div class = "row">
        <div id = "_mnav">
            <div id = "_logo">
                <img  id = "_logs" src = "../../assets/imgs/grablog_b.png">
            </div>

            <div id = "_access">
                <div id = "_cont" tabindex="0"><a id="navItem" class="navItem"href="<?PHP echo base_url('index.php/c_login/logout'); ?>"> Log Out </a>

                </div>
            </div>
        </div>
    </div>
    <div class = "row">
        <div id = "_mwindow">
            <div id = "_glwind">
                <div id = "_lwind">
                    <div id = "_propic">
                        <img id = "_imgpic" src = "<?= base_url() ?>assets/imgs/profile_pic.png">
                    </div>

                    <div id = "_proname">
                        Juan dela Cruz III
                    </div>

                    <div class = "_line"></div>

                    <div id = "_personal">
                        <div class = "_headr"> Personal </div>
                        <div class = "_subhdr" id = "_actspot"> History </div>
                        <div class = "_subhdr" > <a href = "<?PHP echo base_url('index.php/profile'); ?>"> Profile</a> </div>

                    </div>

                    <div class = "_line"></div>

                </div>
            </div>
            <!-- rwind -->
            <div id = "_rwind">
                <!-- START -->
                <div class="row box">
                    <div class="col-md-10 col-md-push-2 content-page">
                        <p class="content-title">History</p>

                        <div class="filter-box">
                            <select class="form-control" id="form_building" name="form-building" onchange="filterYear(this.value)">
                                <option value="" selected="" disabled="">Choose a year...</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                            </select>
                        </div>

                                    <div class="table-part table-responsive">
                                        <table id = "historyTable" class="table table-hover">
                                        </table>
                                    </div>
                                </div>


                        <!-- end -->
                    </div>
                    <!-- RWIND END -->

                </div>

                <div id = "_hlight"> </div>
            </div>
        </div>

</body>

</html>
