<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --brand: #b08968;
            --brand-dark: #7f5539;
            --brand-soft: #f3e9dc;
        }

        body { background: #faf6f1; }

        .navbar-custom { background: linear-gradient(90deg, var(--brand-dark), var(--brand)); }
        .footer-custom { background: #4a3b32; }

        .alert { border: 0; border-radius: 12px; }

        .btn-brand {
            background: var(--brand);
            color: #fff;
            border: 0;
            border-radius: 10px;
            padding: .55rem 1.1rem;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(176, 137, 104, .4);
            transition: .2s;
        }
        .btn-brand:hover { background: var(--brand-dark); color: #fff; transform: translateY(-1px); }

        .table-card {
            border: 0;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 6px 24px rgba(127, 85, 57, .1);
        }
        .table-card thead th {
            background: var(--brand-soft);
            color: var(--brand-dark);
            font-size: .78rem;
            font-weight: 600;
            letter-spacing: .05em;
            text-transform: uppercase;
            padding: 1rem;
            border: 0;
        }
        .table-card tbody td { padding: 1rem; border-color: #f3ece4; }

        .id-chip {
            background: #f6f0e8;
            color: #8a7566;
            border-radius: 6px;
            padding: .15rem .45rem;
            font-family: monospace;
            font-size: .8rem;
        }
        .badge-kelas {
            background: var(--brand-soft);
            color: var(--brand-dark);
            border-radius: 8px;
            padding: .4rem .7rem;
            font-weight: 600;
        }

        .btn-action {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            border: 0;
            border-radius: 10px;
            padding: .4rem .85rem;
            font-size: .85rem;
            font-weight: 500;
            text-decoration: none;
            transition: .2s;
        }
        .btn-edit { background: #f3e9dc; color: #7f5539; }
        .btn-edit:hover { background: var(--brand); color: #fff; transform: translateY(-1px); }
        .btn-hapus { background: #f8e3df; color: #a4473b; }
        .btn-hapus:hover { background: #c0564a; color: #fff; transform: translateY(-1px); }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <x-navbar />

    <div class="container mt-4 flex-grow-1">
        @yield('content')
    </div>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>