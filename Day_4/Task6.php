<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-success">

    <?php
    $val = ["Moniter" => 15000, "Chair" => 6000, "Headest" => 12000, "Keyboard" => 3000, "Mouse" => 9000];

    Asort($val);

    ?>

    <div class="container mt-5">
        <h2> Asort()</h2>
        <ul class="list-group">
            <?php foreach ($val as $k => $v): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span><strong><?= $k ?></strong></span>
                    <span class="badge bg-primary rounded-pill"><?= $v . " EGP" ?></span>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>

    
        <?php
        $vall = ["Moniter" => 15000, "Chair" => 6000, "Headest" => 12000, "Keyboard" => 3000, "Mouse" => 9000];

        ksort($vall);

        ?>

        <div class="container mt-5">
            <h2> Ksort()</h2>
            <ul class="list-group">
                <?php foreach ($vall as $k => $v): ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <span><strong><?= $k ?></strong></span>
                        <span class="badge bg-primary rounded-pill"><?= $v . " EGP" ?></span>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
   

    <?php
    $valll = ["Moniter" => 15000, "Chair" => 6000, "Headest" => 12000, "Keyboard" => 3000, "Mouse" => 9000];


    rsort($valll);

    ?>

    <div class="container mt-5">
        <h2> Rsort()</h2>
        <ul class="list-group">
            <?php foreach ($valll as $k => $v): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span><strong><?= $k ?></strong></span>
                    <span class="badge bg-primary rounded-pill"><?= $v . " EGP" ?></span>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>

    <?php
    $vallll = ["Moniter" => 15000, "Chair" => 6000, "Headest" => 12000, "Keyboard" => 3000, "Mouse" => 9000];

    sort($vallll);

    ?>

    <div class="container mt-5">
        <h2> Sort()</h2>
        <ul class="list-group">
            <?php foreach ($vallll as $k => $v): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span><strong><?= $k ?></strong></span>
                    <span class="badge bg-primary rounded-pill"><?= $v . " EGP" ?></span>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>


    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>