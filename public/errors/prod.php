<html>
<head>
  <title>Production</title>
  <style>
    * { margin: 0; padding: 0; font: inherit; box-sizing: border-box; }

        html { min-height: 100%; }

        body {
        height: 100%;
        background: #000;
        background-image: radial-gradient(#11581E, #041607);
        font-family: Inconsolata;
        font-size: 1.8rem;
        color: rgba(128, 255, 128, 0.8);
        text-shadow:
            0 0 1ex rgba(51, 255, 51, 1),
            0 0 2px rgba(255, 255, 255, 0.8);
        }

        h1 { font-size: 3.8rem; margin: 30px 0; }
        p { font-size: 1.8rem; margin: 30px 0; }

        .overlay {
        pointer-events: none;
        position: absolute;
        width: 100%;
        height: 100%;
        background:
            repeating-linear-gradient(
            180deg,
            rgba(0, 0, 0, 0) 0,
            rgba(0, 0, 0, 0.3) 50%,
            rgba(0, 0, 0, 0) 100%);
        background-size: auto 4px;
        z-index: 99;
        }

        .overlay::before {
        content: "";
        pointer-events: none;
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(
            0deg,
            transparent 0%,
            rgba(32, 128, 32, 0.2) 2%,
            rgba(32, 128, 32, 0.8) 3%,
            rgba(32, 128, 32, 0.2) 3%,
            transparent 100%);
        background-repeat: no-repeat;
        animation: scan 7.5s linear 0s infinite;
        }

        @keyframes scan {
        0%        { background-position: 0 -100vh; }
        35%, 100% { background-position: 0 100vh; }
        }

        .terminal {
        box-sizing: inherit;
        position: absolute;
        height: 100%;
        width: 1000px;
        max-width: 100%;
        padding: 4rem;
        text-transform: uppercase;
        }

        .output {
        color: rgba(128, 255, 128, 0.8);
        text-shadow:
            0 0 1px rgba(51, 255, 51, 0.4),
            0 0 2px rgba(255, 255, 255, 0.8);
        }

        .output::before { content: "> "; }

        a { color: #fff; text-decoration: none; }

        .code { color: #fff; }
  </style>
</head>
<body>
<div class="overlay"></div>
<div class="terminal">

<h1>Error <span class="code">Production</span></h1>

<p class="output">The page you are looking for might have been removed, had its name changed or is temporarily unavailable</p>

<p class="output">Please try <a href="/">[ Главная ]</a></p>

<p class="output">Good luck</p>
</div>
</body>
</html>