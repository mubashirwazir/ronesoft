<!doctype html>
<html class="no-js" lang=" ">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RONEsoft</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/icons/main.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="apple-touch-icon" href="assets/img/icons/main.png">

    <!-- ************************* CSS Files ************************* -->
      {!!htmlScriptTagJsApi()!!}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/scss/main.scss">

</head>

<body>
 <!-- ** *********************** JS Files ************************* -->
 @yield('content')
    <!-- jQuery JS -->
    <script src="assets/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    (function (o, u, t, b, a, s, e) {
        window[b] = window[b] || {}; (e = e || [])['key'] = o; e['__obr'] = u.location.href; a = [];
        u.location.search.replace('?', '').split('&').forEach(function (q) { if (q.startsWith(b) || q.startsWith('_obid')) e[q.split('=')[0]] = q.split('=')[1]; });
        e['_obid'] = e['_obid'] || (u.cookie.match(/(^|;)\s*_obid\s*=\s*([^;]+)/) || []).pop() || 0;
        for (k in e) { if (e.hasOwnProperty(k)) a.push(encodeURIComponent(k) + '=' + encodeURIComponent(e[k])); }
        s = u.createElement('script'); s.src = t + '?' + a.join('&'); u.body.appendChild(s);
    })('002df2af-6570-46d6-adac-437824a4ed4a', document, 'https://plugin.sopro.io/hq.js', 'outbase')
</script>


</body>

</html>
