<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body style="background-color: #362FD9;">
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <header>
                                <h4 class="text-primary">Register</h4>
                            </header>
                            <br>

                            <form action="/<?= (isset($edit['id'])) ? "view/" . $edit['id'] : "submit" ?>" method="post">
                                <div class="mb-3">
                                    <label for="firstName" class="form-label">Enter First Name:</label>
                                    <input type="text" class="form-control" id="firstName" name="First" required value="<?= (isset($edit['id'])) ? $edit['First'] : "" ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="lastName" class="form-label">Enter Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" name="Last" required value="<?= (isset($edit['id'])) ? $edit['Last'] : "" ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="section" class="form-label">Enter Section:</label>
                                    <input type="text" class="form-control" id="section" name="Section" required value="<?= (isset($edit['id'])) ? $edit['Section'] : "" ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Enter Number:</label>
                                    <input type="text" class="form-control" id="number" name="Number" required value="<?= (isset($edit['id'])) ? $edit['Number'] : "" ?>">
                                </div>
                                <a href="/home" class="btn btn-primary" style="background-color: #0892d0">New Record</a>

                                <button class="btn btn-primary" type="submit"><?= (isset($edit['id'])) ? "Update" : "Submit" ?></button>
                            </form>

                        </div>
                        <div class="col-md-6">
                            <header>
                                <h4 class="text-primary">Registered</h4>
                            </header>
                            <table class="table table-striped mt-3">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Section</th>
                                        <th>Contact</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lavaact as $pr): ?>
                                        <tr>
                                            <td><?= $pr['First'] ?></td>
                                            <td><?= $pr['Last'] ?></td>
                                            <td><?= $pr['Section'] ?></td>
                                            <td><?= $pr['Number'] ?></td>
                                            <td class="action-buttons">
                                                <a href="/edit/<?= $pr['id'] ?>" class="btn btn-warning" >Edit</a>
                                                <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger" >Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
