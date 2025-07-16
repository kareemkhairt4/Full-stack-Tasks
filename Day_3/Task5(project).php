<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <body class=" p-5 bg-body-secondary ">
        <div class="container">
            <div class=" row d-flex justify-content-center">
                <div class="col-6">
                    <h1 class="row d-flex justify-content-center"> نموذج تسجيل الطالب </h1>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationServer01" class="form-label d-flex justify-content-end">البريد
                                    الالكتروني</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" value="Mark"
                                    required>
                                <div class="valid-feedback d-flex justify-content-end">
                                    من فضلك ادخل بريديا الكترونيا صحيحا
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="validationServer01" class="form-label d-flex justify-content-end">الاسم
                                    بالكامل</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" value="Mark"
                                    required>
                                <div class="valid-feedback d-flex justify-content-end">
                                    من فضلك ادخل الاسم
                                </div>

                                
                            </div>

                            <div class="col-md-4">
                                <label for="validationServer01"
                                    class="form-label d-flex justify-content-end">الدرجة</label>
                                <input type="number" class="form-control is-valid" id="validationServer01" value="Mark"
                                    required>
                                <div class="valid-feedback d-flex justify-content-end">
                                    ادخل الدرجه من 0 الي 100
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationServer04"
                                    class="form-label d-flex justify-content-end">الجنس</label>
                                <select class="form-select is-valid" id="validationServer04"
                                    aria-describedby="validationServer04Feedback" required>
                                    <option selected disabled value="">ذكر</option>
                                    <option>انثي</option>
                                </select>
                                <div id="validationServer04Feedback" class="valid-feedback d-flex justify-content-end">
                                    اختر الجنس
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="validationServer01"
                                    class="form-label d-flex justify-content-end">العمر</label>
                                <input type="number" class="form-control is-valid" id="validationServer01" value="Mark"
                                    required>
                                <div class="valid-feedback d-flex justify-content-end">
                                    ادخل العمر بشكل صحيح
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1"
                                    class="form-label d-flex justify-content-end">ملاحظات</label>
                                <textarea class="form-control is-valid" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                                <div class="valid-feedback d-flex justify-content-end">
                                    اكتب رايك هنا
                                </div>
                            </div>

                            <div class="col-12 mt-2 d-flex justify-content-center ">
                                <div class="col-3 p-1 ">
                                    <button class="btn btn-primary w-100 mb-4 mt-4 bg-warning" type="submit">Submit
                                        form</button>
                                </div>
                                <div class="col-3 p-1 ">
                                    <button type="button" class="btn btn-primary w-100 mb-4 mt-4 bg-info"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class=" row d-flex justify-content-center">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead class="table-dark">
                                            <tr>

                                                <th scope="col">التقدير</th>
                                                <th scope="col">الدرجات</th>

                                                <th scope="col">الاسم</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $x = 99;
                                            $y = 54;
                                            $z = 12;
                                            function result($marks)
                                            {
                                                if ($marks >= 85) {
                                                    echo "ممتاز";
                                                } elseif ($marks >= 75) {
                                                    echo "جيد جدا";
                                                } elseif ($marks >= 65) {
                                                    echo "جيد";
                                                } elseif ($marks >= 50) {
                                                    echo "مقبول";
                                                } else {
                                                    echo "راسب";
                                                }


                                            } ?>
                                            <tr>
                                                <td>
                                                    <?php result($x); ?>
                                                </td>
                                                <td>
                                                    <?php echo "$x"; ?>
                                                </td>

                                                <td>كريم</td>
                                            </tr>
                                            <tr class="table-light">

                                                <td>
                                                    <?php result($y); ?>
                                                </td>

                                                <td>
                                                    <?php echo "$y"; ?>
                                                </td>

                                                <td>علياء</td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <?php result($z); ?>
                                                </td>

                                                <td>
                                                    <?php echo "$z"; ?>
                                                </td>

                                                <td>سامي</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>
        <script src="js/bootstrap.bundle.js"></script>
    </body>

</html>