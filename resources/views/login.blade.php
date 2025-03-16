<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login & Sign Up - Shards Dashboard</title>
    <meta name="description" content="A simple login and sign up page built with Shards Dashboard components">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <style>
        body {
            background-color: #f5f6f8;
        }

        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-card {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 0.625rem;
            border: none;
            max-width: 500px;
        }

        .btn-pill {
            border-radius: 50px;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .tab-content {
            padding: 1rem 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .divider {
            position: relative;
            text-align: center;
            margin: 1.5rem 0;
        }

        .divider:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: #e1e5eb;
        }

        .divider span {
            position: relative;
            background-color: white;
            padding: 0 1rem;
        }
    </style>
</head>

<body class="h-100">
    <div class="auth-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="card auth-card">
                        <div class="card-body p-4 p-lg-5">
                            <!-- App Logo -->
                            <div class="text-center mb-4">
                                <img src="images/avatars/richatt.png" style="height: auto; width: 200px;" alt="Logo"
                                    class="mb-3">
                            </div>

                            <!-- Tabs -->
                            <ul class="nav nav-tabs" id="auth-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                                        aria-controls="login" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                        aria-controls="register" aria-selected="false">Sign Up</a>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content" id="auth-tab-content">
                                <!-- Login Tab -->
                                <div class="tab-pane fade show active" id="login" role="tabpanel"
                                    aria-labelledby="login-tab">
                                    <!-- Login Form -->
                                    <form action="/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="login-email">Email</label>
                                            <div class="input-group input-group-seamless">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </span>
                                                <input type="email" class="form-control" id="login-email"
                                                    placeholder="Email" name="email" value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="login-password">Mot de passe</label>
                                            <div class="input-group input-group-seamless">
                                                <input type="password" class="form-control" id="login-password"
                                                    placeholder="Mot de passe" name="password">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock</i>
                                                    </span>
                                                </span>
                                            </div>
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-primary btn-pill btn-block">Log
                                                In</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Register Tab -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <!-- Register Form -->
                                    <form action="/signup" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="reg-name">Nom</label>
                                            <div class="input-group input-group-seamless">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" id="reg-name"
                                                    placeholder="Nom" name="name" value="{{ old('name') }}">
                                            </div>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="reg-email">Email</label>
                                            <div class="input-group input-group-seamless">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </span>
                                                <input type="email" class="form-control" id="reg-email"
                                                    placeholder="Email" name="email" value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- New Role Selection Field -->
                                        <div class="form-group">
                                            <label for="reg-role">Role</label>
                                            <div class="input-group input-group-seamless">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                </span>
                                                <select class="form-control" id="reg-role" name="role">
                                                    <option value="Consulteur" selected>Consulteur</option>
                                                    <option value="Moderateur">Moderateur</option>
                                                </select>
                                            </div>
                                            @error('role')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="reg-password">Mot de passe</label>
                                            <div class="input-group input-group-seamless">
                                                <input type="password" class="form-control" id="reg-password"
                                                    placeholder="Mot de passe" name="password">
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock</i>
                                                    </span>
                                                </span>
                                            </div>
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-0">
                                            <button type="submit"
                                                class="btn btn-success btn-pill btn-block">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>