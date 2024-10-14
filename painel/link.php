<?php
session_start();
include '../conexao.php';
// Verifica se o ID do aplicativo foi passado
if (isset($_GET['id'])) {
    $app_id = $_GET['id'];
    $sql = "SELECT * FROM aplicativos WHERE id = '$app_id'";
    $result = $conn->query($sql);
       if ($result->num_rows > 0) {
        $app = $result->fetch_assoc();
    } else {
        $_SESSION['error_message'] = "Aplicativo não encontrado.";
        header('Location: index.php');
        exit;
    }
} else {
    $_SESSION['error_message'] = "ID do aplicativo não especificado.";
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/fonts.css">
    <link rel="shortcut icon" href="img/favicon_v3.ico">

    <meta property="og:title" content="iSharing: Localizador de móvil - Aplicaciones en Google Play">
    <title id="main-title">Titulo da pagina &nbsp;<?php echo htmlspecialchars($app['app_name']); ?></title>
    <meta name="description" property="og:description" content="Rastreador móvil celular para familia">
    <meta name="twitter:title" content="iSharing: Localizador de móvil - Aplicaciones en Google Play">
    <meta name="twitter:description" content="Rastreador móvil celular para familia">


</head>

<body id="yDmH0d" jscontroller="pjICDe"
    jsaction="rcuQ6b:npT2md; click:FAbpgf; auxclick:FAbpgf;UjQMac:.CLIENT;c0v8t:.CLIENT;keydown:.CLIENT;keyup:.CLIENT;keypress:.CLIENT;nHjqDd:.CLIENT;asggkf:.CLIENT;LhiQec:.CLIENT;GvneHb:.CLIENT;qako4e:.CLIENT"
    class="tQj5Y ghyPEc IqBfM e2G3Fb b30Rkd EIlDfe d8Etdd LcUz9d uOat3d" data-has-header="true" data-has-footer="true"
    style="min-height: 866px;">

    <c-wiz jsrenderer="dfkSTe" id="kO001e" jsshadow="" jsdata="deferred-c531" data-p="%.@.1,1,0,0,0]"
        data-node-index="0;0" autoupdate="" jsmodel="hc6Ubd" c-wiz="">

        <header class="S3WLMd" jsaction="rcuQ6b:npT2md;KwkHzf:IPLOJd;tGMTLb:T1PkR;" jscontroller="ArluEf" role="banner">
            <nav class="oPjgQb" aria-label="Cabecera de página"><a href="" aria-label="Logotipo de Google Play"
                    class="f0UV3d"><svg class="kOqhQd" aria-hidden="true" viewBox="0 0 40 40"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0,0h40v40H0V0z"></path>
                        <g>
                            <path
                                d="M19.7,19.2L4.3,35.3c0,0,0,0,0,0c0.5,1.7,2.1,3,4,3c0.8,0,1.5-0.2,2.1-0.6l0,0l17.4-9.9L19.7,19.2z"
                                fill="#EA4335"></path>
                            <path
                                d="M35.3,16.4L35.3,16.4l-7.5-4.3l-8.4,7.4l8.5,8.3l7.5-4.2c1.3-0.7,2.2-2.1,2.2-3.6C37.5,18.5,36.6,17.1,35.3,16.4z"
                                fill="#FBBC04"></path>
                            <path d="M4.3,4.7C4.2,5,4.2,5.4,4.2,5.8v28.5c0,0.4,0,0.7,0.1,1.1l16-15.7L4.3,4.7z"
                                fill="#4285F4"></path>
                            <path
                                d="M19.8,20l8-7.9L10.5,2.3C9.9,1.9,9.1,1.7,8.3,1.7c-1.9,0-3.6,1.3-4,3c0,0,0,0,0,0L19.8,20z"
                                fill="#34A853"></path>
                        </g>
                    </svg><span aria-hidden="true">google_logo Play</span></a>
                <div class="oc9n0c">
                    <div jsaction="JIbuQc:bWGA9c;"><button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc"
                            jscontroller="soHxf"
                            jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                            data-disable-idom="true" aria-label="Buscar">
                            <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                            <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div><i class="google-material-icons r9optf"
                                aria-hidden="true">search</i>
                        </button></div>
                    <div jscontroller="IcVnM" jsaction="rcuQ6b:ewIngf;JIbuQc:L1KARc"><button
                            class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ QDwDD mN1ivc" jscontroller="soHxf"
                            jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                            data-disable-idom="true" aria-label="Centro de Ayuda">
                            <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                            <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div><i class="google-material-icons r9optf"
                                aria-hidden="true">help_outline</i>
                        </button></div>
                    <c-wiz jsrenderer="yNB6me" jsshadow="" jsdata="deferred-c822" data-p="%.@.]" jscontroller="IJGqxf"
                        jsaction="FzgWvd:fmKhsb;iFFCZc:nixEK;" data-node-index="1;0" jsmodel="hc6Ubd" c-wiz="">
                        <div>
                            <div class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jscontroller="wg1P6b"
                                jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);xDliB:oNPcuf;SM8mFd:li9Srb;iFFCZc:NSsOUb;Rld2oe:NSsOUb"
                                jsshadow="" data-disable-idom="true">
                                <div jsname="WjL7X" jsslot=""><button
                                        class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc PeWVCc" jscontroller="soHxf"
                                        jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                        data-disable-idom="true" aria-expanded="false" aria-haspopup="menu">
                                        <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                        <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div><img src="img/perfil.png"
                                            class="VfPpkd-kBDsod WrEZCd" aria-hidden="true" data-iml="9449.09999999404">
                                    </button></div>

                            </div>
                        </div>
                    </c-wiz>
                </div>
            </nav>
            <div class="uOuZTe">
                <c-wiz jsrenderer="qqarmf" jsshadow="" jsdata="deferred-c823" data-p="%.@.1,0]" data-node-index="2;0"
                    autoupdate="" jsmodel="hc6Ubd" c-wiz="">
                    <div class="P7NFWb ">
                        <nav class="yyaGpb"><a href="" class="uEz1ib Y4jiDf">
                                <div class="jb05Ib"><svg width="24" height="24" viewBox="0 0 21 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="Y4jiDf">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.3 8.4C19.2169 7.65213 19.0648 6.90427 18.9009 6.09902C18.8676 5.93522 18.8338 5.76904 18.8 5.6L18.8 5.59986C18.7 5.1 18.7 5.09996 18.6 4.7L18.5 4.4C18.2 1.8 16 0 13.3 0H6.7C4.1 0 1.8 1.8 1.4 4.4C1.4 4.43174 1.4 4.4534 1.3968 4.47458C1.38993 4.52014 1.36826 4.56347 1.3 4.7C1.3 5.1 1.3 5.1 1.2 5.6C1.1 6.05 1.025 6.525 0.95 7C0.875 7.475 0.8 7.95 0.7 8.4C0.1 11.9 0 12.5 0 12.7C0 14.2 1.2 15.5 2.8 15.5C3.6 15.5 4.3 15.2 4.8 14.7L7.7 11.9H12.4L15.3 14.8C15.8 15.3 16.5 15.6 17.3 15.6C18.8 15.6 20.1 14.4 20.1 12.8C20.0055 12.5165 19.911 11.9651 19.3946 8.95177L19.3 8.4ZM13 5C13.4971 5 13.9 4.59706 13.9 4.1C13.9 3.60294 13.4971 3.2 13 3.2C12.5029 3.2 12.1 3.60294 12.1 4.1C12.1 4.59706 12.5029 5 13 5ZM15.8 6C15.8 6.49706 15.3971 6.9 14.9 6.9C14.4029 6.9 14 6.49706 14 6C14 5.50294 14.4029 5.1 14.9 5.1C15.3971 5.1 15.8 5.50294 15.8 6ZM10.5 5.4C10.2 5.7 10.2 6.3 10.5 6.6C10.8 6.9 11.4 6.9 11.7 6.6C12 6.3 12 5.7 11.7 5.4C11.4 5.1 10.9 5.1 10.5 5.4ZM13 8.8C13.4971 8.8 13.9 8.39706 13.9 7.9C13.9 7.40294 13.4971 7 13 7C12.5029 7 12.1 7.40294 12.1 7.9C12.1 8.39706 12.5029 8.8 13 8.8ZM6.4 3.5H7.6V5.4H9.5V6.6H7.6V8.5H6.4V6.6H4.5V5.4H6.4V3.5ZM16.5 13.3C16.7 13.5 16.9 13.6 17.2 13.6C17.8 13.6 18.2 13.2 18.2 12.6C18.2 12.7 16.8 4.8 16.8 4.7C16.5 3 15 1.8 13.3 1.8H6.7C4.9 1.8 3.5 3 3.2 4.7C3.2 4.8 1.8 12.7 1.8 12.7C1.8 13.3 2.3 13.7 2.8 13.7C3.1 13.7 3.3 13.6 3.5 13.4L6.9 10H13.1L13.4 10.2L16.5 13.3Z">
                                        </path>
                                    </svg></div>
                                <div class="WL3b7c">Juegos</div>
                            </a><a href="" class="uEz1ib VuUAje">
                                <div class="jb05Ib"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="VuUAje ndrlL">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15 4H18C19.1 4 20 4.9 20 6V9C20 10.1 19.1 11 18 11H15C13.9 11 13 10.1 13 9V6C13 4.9 13.9 4 15 4ZM9 13H6C4.9 13 4 13.9 4 15V18C4 19.1 4.9 20 6 20H9C10.1 20 11 19.1 11 18V15C11 13.9 10.1 13 9 13ZM18 13H15C13.9 13 13 13.9 13 15V18C13 19.1 13.9 20 15 20H18C19.1 20 20 19.1 20 18V15C20 13.9 19.1 13 18 13ZM9 4H6C4.9 4 4 4.9 4 6V9C4 10.1 4.9 11 6 11H9C10.1 11 11 10.1 11 9V6C11 4.9 10.1 4 9 4Z">
                                        </path>
                                    </svg></div>
                                <div class="WL3b7c">Apps</div>
                            </a><a href="" class="uEz1ib Y4jiDf">
                                <div class="jb05Ib"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="Y4jiDf">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3 2V22H21V2H3ZM5 20H19V4H5V20ZM9 7H6V5H9V7ZM18 7H15V5H18V7ZM6 19H9V17H6V19ZM18 19H15V17H18V19ZM15 15H18V13H15V15ZM9 15H6V13H9V15ZM15 11H18V9H15V11ZM9 11H6V9H9V11Z">
                                        </path>
                                    </svg></div>
                                <div class="WL3b7c">Películas</div>
                            </a><a href="" class="uEz1ib Y4jiDf">
                                <div class="jb05Ib"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="Y4jiDf">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.4996 6.36584L14.001 7.65237V4H11.001V7.65075L12.4996 6.36584ZM10 2H11.001H14.001H15H16.998C18.6461 2 20.001 3.35397 20.001 5.002V18.998C20.001 20.646 18.6461 22 16.998 22H4V2H10ZM18.001 5.002C18.001 4.459 17.542 4 16.998 4H16.001V12L12.5 9L9.001 12V4H6V20H16.998C17.542 20 18.001 19.541 18.001 18.998V5.002Z">
                                        </path>
                                    </svg></div>
                                <div class="WL3b7c">Libros</div>
                            </a><a href="" class="uEz1ib Y4jiDf">
                                <div class="jb05Ib"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="Y4jiDf">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.9995 20.439C13.1543 20.787 17.2264 22 17.6293 22C18.4311 22 18.928 21.578 19.154 21.325C19.7049 20.7081 19.7029 20.0604 19.6999 19.0794L19.6999 19.074C19.6989 18.647 19.6299 16.111 19.6009 15.125C20.2258 14.252 21.8914 11.907 22.1604 11.5C22.7292 10.643 23.2201 9.901 22.8972 8.908C22.5724 7.90856 21.7594 7.61034 20.8112 7.26259L20.8096 7.262C20.3747 7.103 17.7853 6.254 16.8195 5.942C16.2026 5.107 14.518 2.848 14.221 2.476L14.2198 2.47445C13.5875 1.68311 13.0416 1 11.9995 1C10.9577 1 10.4108 1.684 9.77797 2.477C9.48103 2.848 7.79639 5.107 7.18052 5.942C6.21372 6.255 3.62427 7.103 3.18436 7.265C2.24156 7.61 1.42773 7.908 1.1028 8.908C0.779871 9.901 1.27077 10.643 1.83965 11.501C2.10059 11.894 3.77424 14.252 4.39911 15.125C4.37011 16.111 4.30113 18.646 4.29913 19.074V19.0741C4.29613 20.058 4.29415 20.708 4.84501 21.324C5.06996 21.576 5.56686 22 6.37069 22C6.7726 22 10.8447 20.787 11.9995 20.439ZM17.6018 15.1838C17.6437 16.6103 17.6991 18.7493 17.6999 19.0787C17.7021 19.8051 17.6963 19.9322 17.6736 19.9767C17.5616 19.9504 17.418 19.9144 17.2472 19.8699C16.8391 19.7634 16.2949 19.6126 15.6462 19.4271C14.6587 19.1447 13.4965 18.8013 12.5766 18.5241L11.9995 18.3502L11.4224 18.5241C10.5029 18.8012 9.34041 19.1447 8.35292 19.4271C7.7042 19.6126 7.16005 19.7634 6.75206 19.8699C6.58148 19.9145 6.43802 19.9504 6.32604 19.9766C6.30304 19.9326 6.2969 19.8071 6.29912 19.0801C6.30067 18.7488 6.35718 16.5803 6.39824 15.1838L6.41807 14.5095L6.02543 13.9609C5.19866 12.8058 3.70925 10.7011 3.50581 10.3947C3.01485 9.65422 2.98744 9.57977 3.00475 9.52653C3.02422 9.46662 3.06796 9.4373 3.87165 9.1432C4.20463 9.02058 6.39401 8.29883 7.79654 7.84477L8.40835 7.64669L8.79007 7.12916C9.57143 6.06978 11.1071 4.01707 11.3394 3.72674C11.8852 3.04281 11.9401 3 11.9995 3C12.049 3 12.0824 3.02198 12.403 3.40831C12.4693 3.48831 12.5251 3.55748 12.6586 3.72451C12.8889 4.01303 14.4014 6.03473 15.2108 7.1304L15.5929 7.64752L16.2047 7.84516C17.4867 8.25931 19.7877 9.01784 20.1229 9.1404L20.1237 9.1407C20.2142 9.17389 20.2145 9.17398 20.3015 9.20614C20.9377 9.44213 20.977 9.47051 20.9951 9.52605C21.0125 9.57968 20.9851 9.65415 20.4941 10.3939C20.2859 10.7088 18.8457 12.7438 17.9746 13.9609L17.5819 14.5095L17.6018 15.1838Z">
                                        </path>
                                    </svg></div>
                                <div class="WL3b7c">Niños</div>
                            </a></nav>
                    </div>
                    <c-data id="c823" jsdata=" tjNwSb;_;$1056"></c-data>
                </c-wiz>
            </div>
        </header>

    </c-wiz>


    <c-wiz c-wiz="" jsrenderer="Z5wzge" class="SSPGKf Czez9d" jsdata="deferred-c572"
        data-p="%.@.[org.findmykids.app,7],null,0,null,1,[96,108,72,100,27,183,222,8,57,169,110,11,184,16,1,139,152,194,165,68,163,211,9,71,31,195,12,64,151,150,148,113,104,55,56,145,32,34,10,122],[[[[7,31],[[1,52,43,112,92,58,69,31,19,96,103]]]]],null,[[[1,null,1],null,[[null,[]]],null,null,null,null,[null,2],null,null,null,null,null,null,null,null,null,null,null,null,null,null,[1]],[null,[[null,[]]],null,null,[1]],[null,[[null,[]]],null,[1]],[null,[[null,[]]]],null,null,null,null,[[[null,[]]]],[[[null,[]]]]],null,2,null,null,1,null,[[1,9,10,11,13,14,19,20,38,43,47,49,52,58,59,63,69,70,73,74,75,78,79,80,91,92,95,96,97,100,101,103,106,112,119,129,137,139,141,145,146,151,155,169]],null,[0]]"
        jscontroller="oEJvKc" data-node-index="0;0" autoupdate="" jsmodel="hc6Ubd" data-ogpc=""
        style="visibility: visible; opacity: 1;" aria-busy="false" data-savescroll="0">
        <div jsname="a9kxte" class="T4LgNb ">
            <div jsname="qJTHM" class="kFwPee">
                <div jsaction="rcuQ6b:eyofDf;sG2nqb:ffFfWd" jscontroller="fl2Zj">
                    <div jsaction="rcuQ6b:ilz2nb" jscontroller="FAattb" jsdata="Piyxpc;_;$644"></div>
                    <div class="tU8Y5c">
                        <div>
                            <div class="dzkqwc">
                                <div class="wkMJlb YWi3ub">
                                    <div>
                                        <c-wiz class="app-name-panel" c-wiz="" jsrenderer="XMEW5d" jsshadow=""
                                            jsdata="deferred-c573" data-p="%.@.null,1,[org.findmykids.app,7],3]"
                                            data-node-index="11;0" jsmodel="hc6Ubd">

                                            <div class="Mqg6jb Mhrnjf">
                                                <img src="../uploads/<?php echo htmlspecialchars($app['app_logo']); ?>"
                                                    srcset="https://play-lh.googleusercontent.com/eEZuWwcu-rcwi3_9Z-4tO76tIzDgeprl6zldnyUC71-tgnp_YB3DmRHILVIqs07YJlE=w480-h960-rw 2x"
                                                    class="T75of nm4vBd arM4bb" aria-hidden="true" alt="Icon image"
                                                    itemprop="image" data-iml="26490.600000023842"
                                                    style="padding:30px" />
                                                <img src="../uploads/<?php echo htmlspecialchars($app['app_logo']); ?>"
                                                    srcset="https://play-lh.googleusercontent.com/eEZuWwcu-rcwi3_9Z-4tO76tIzDgeprl6zldnyUC71-tgnp_YB3DmRHILVIqs07YJlE=w480-h960-rw 2x"
                                                    class="T75of Q3MhI NXRaDe" aria-hidden="true"
                                                    data-iml="26490.70000001788" />
                                            </div>

                                            <div class="hnnXjf">
                                                <div class="Il7kR">
                                                    <div class="RhBWnf">
                                                        <img src="../uploads/<?php echo htmlspecialchars($app['app_logo']); ?>"
                                                            class="T75of cN0oRe fFmL2e" aria-hidden="true"
                                                            alt="Imagen de icono" itemprop="image"
                                                            data-iml="21710.20000000298" />
                                                        <div>
                                                            <div class="Fd93Bb F5UCq p5VxAd">
                                                                <h1><span class="AfwdI" itemprop="name">
                                                                        <?php echo htmlspecialchars($app['app_name']); ?>
                                                                    </span></h1>
                                                            </div>
                                                            <div class="tv4jIf">
                                                                <div class="Vbfug auoIOc"><a><span>Empresa do
                                                                            aplicativo</span></a></div>
                                                                <div class="ulKokd">
                                                                    <div class=""><span class="UIuSk">Compras en
                                                                            aplicaciones</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="JU1wdd">
                                                    <div class="l8YSdd">
                                                        <div class="w7Iutd">
                                                            <div class="wVqUob">
                                                                <div class="ClM7O">
                                                                    <div itemprop="starRating">
                                                                        <div class="TT9eCd"
                                                                            aria-label="Valoración: 4,8 estrellas de cinco">
                                                                            4,8<i class="google-material-icons ERwvGb"
                                                                                aria-hidden="true">star</i></div>
                                                                    </div>
                                                                </div>
                                                                <div class="g1rdde">1,59 M de avaliações</div>
                                                            </div>
                                                            <div class="wVqUob">
                                                                <div class="ClM7O">50M+</div>
                                                                <div class="g1rdde">Downloads</div>
                                                            </div>
                                                            <div class="wVqUob">
                                                                <div class="ClM7O"><img src="img/livre.webp"
                                                                        class="T75of xGa6dd"
                                                                        alt="Clasificación de contenido"
                                                                        itemprop="image" data-iml="20449.90000000596">
                                                                </div>
                                                                <div class="g1rdde"><span
                                                                        itemprop="contentRating"><span>Classificação
                                                                            Livre
                                                                        </span></span>
                                                                    <div jsaction="click:CnOdef" class="MKV5ee"
                                                                        role="button" tabindex="0" jscontroller="kJXwXb"
                                                                        aria-label="Más información sobre esta clasificación del contenido">
                                                                        <i class="google-material-icons oUaal"
                                                                            aria-hidden="true">info</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <c-data id="c573" jsdata=" W902Ue;_;$780"></c-data>
                                        </c-wiz>
                                        <div class="kk2r5b">
                                            <div class="edaMIf">
                                                <div class="bGJWSe">
                                                    <c-wiz c-wiz="" jsrenderer="qk5AGd" class="FuSudc" jsshadow=""
                                                        jsdata="deferred-c574" data-p="%.@.[org.findmykids.app,7],1,1]"
                                                        data-node-index="7;0" autoupdate="" jsmodel="hc6Ubd">
                                                        <div class="VAgTTd LMcLV">
                                                            <div jsaction="JIbuQc:MH7vAb" jscontroller="chfSwc"
                                                                jsmodel="UfnShf"
                                                                data-item-id="%.@.org.findmykids.app,7]"
                                                                data-is-free="true" jsdata="Ddi83b;CgYKBENBRT0=;$781">
                                                                <div class="u4ICaf">
                                                                    <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb"
                                                                        data-is-touch-wrapper="true"> <a
                                                                            href="../uploads/<?php echo htmlspecialchars($app['app_file']); ?>"><button
                                                                                class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 MjT6xe sOCCfd brKGGd BhQfub  zwjsl"
                                                                                jscontroller="soHxf"
                                                                                jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                                                data-disable-idom="true"
                                                                                aria-label="Descargar">
                                                                                <div class="VfPpkd-Jh9lGc"></div>
                                                                                <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                                                                                <div class="VfPpkd-RLmnJb"></div><span
                                                                                    jsname="V67aGc"
                                                                                    class="VfPpkd-vQzf8d"><span><span
                                                                                            itemprop="offers"
                                                                                            itemscope=""
                                                                                            itemtype="https://schema.org/Offer">

                                                                                        </span></span>Baixar</span>
                                                                            </button></a> </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </c-wiz>
                                                </div>
                                            </div>
                                            <div class="OBVQ7">
                                                <c-wiz c-wiz="" jsrenderer="zbKb5e" jsshadow="" jsdata="deferred-c575"
                                                    data-p="%.@.]" data-node-index="5;0" jsmodel="hc6Ubd">
                                                    <div jsaction="JIbuQc:ga9V" jscontroller="aTwUve">

                                                        <div class="egcKT"><button
                                                                class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc yIoKuc"
                                                                jscontroller="soHxf"
                                                                jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                                data-idom-class="yHy1rc eT1oJ mN1ivc yIoKuc"
                                                                aria-label="Compartir">
                                                                <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                                                <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div><span
                                                                    class="VfPpkd-kBDsod y0nrBe" aria-hidden="true"><svg
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        class="bQL56b">
                                                                        <path
                                                                            d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z">
                                                                        </path>
                                                                    </svg></span>
                                                            </button></div>
                                                    </div>
                                                </c-wiz>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="wkMJlb YWi3ub">
                            <div class="nRgZne">
                                <div class="qZmL0">
                                    <div>
                                        <c-wiz c-wiz="" jsrenderer="UZStuc" jsshadow="" jsdata="deferred-c577"
                                            data-p="%.@.[org.findmykids.app,7]]" data-node-index="8;0" jsmodel="hc6Ubd">
                                            <div jsname="oFlqwb" class="UbmABe" jscontroller="pCKBF">
                                                <div jsaction="rcuQ6b:npT2md;d9N7hc:RGEGje;McwVAe:TFCKab"
                                                    jsname="haAclf" jsshadow="" class="bewvKb KUSTKe"
                                                    jscontroller="vrGZEc">
                                                    <div jsname="K9a4Re" role="list" jsslot="" class="aoJE7e qwPPwf">
                                                        <div role="listitem" class="ULeU3b Utde2e">
                                                            <div class="Atcj9b" jscontroller="RQJprf"><img
                                                                    src="../uploads/<?php echo htmlspecialchars($app['img1']); ?>"
                                                                    class="T75of B5GQxf" alt="Captura de pantalla"
                                                                    itemprop="image" data-screenshot-index="0"
                                                                    jsaction="click:IEAdff" role="button" tabindex="0"
                                                                    load="lazy" data-iml="21710.29999999702"></div>
                                                        </div>
                                                        <div role="listitem" class="ULeU3b Utde2e">
                                                            <div class="Atcj9b" jscontroller="RQJprf"><img
                                                                    src="../uploads/<?php echo htmlspecialchars($app['img2']); ?>"
                                                                    class="T75of B5GQxf" alt="Captura de pantalla"
                                                                    itemprop="image" data-screenshot-index="1"
                                                                    jsaction="click:IEAdff" role="button" tabindex="0"
                                                                    load="lazy" data-iml="21710.5"></div>
                                                        </div>
                                                        <div role="listitem" class="ULeU3b Utde2e">
                                                            <div class="Atcj9b" jscontroller="RQJprf"><img
                                                                    src="../uploads/<?php echo htmlspecialchars($app['img3']); ?>"
                                                                    class="T75of B5GQxf" alt="Captura de pantalla"
                                                                    itemprop="image" data-screenshot-index="2"
                                                                    jsaction="click:IEAdff" role="button" tabindex="0"
                                                                    load="lazy" data-iml="21710.70000000298"></div>
                                                        </div>
                                                        <div role="listitem" class="ULeU3b Utde2e">
                                                            <div class="Atcj9b" jscontroller="RQJprf"><img
                                                                    src="../uploads/<?php echo htmlspecialchars($app['img4']); ?>"
                                                                    class="T75of B5GQxf" alt="Captura de pantalla"
                                                                    itemprop="image" data-screenshot-index="3"
                                                                    jsaction="click:IEAdff" role="button" tabindex="0"
                                                                    load="lazy" data-iml="21710.5"></div>
                                                        </div>
                                                        <div role="listitem" class="ULeU3b Utde2e">
                                                            <div class="Atcj9b" jscontroller="RQJprf"><img
                                                                    src="../uploads/<?php echo htmlspecialchars($app['img5']); ?>"
                                                                    class="T75of B5GQxf" alt="Captura de pantalla"
                                                                    itemprop="image" data-screenshot-index="4"
                                                                    jsaction="click:IEAdff" role="button" tabindex="0"
                                                                    load="lazy" data-iml="21710.90000000596"></div>
                                                        </div>

                                                    </div>
                                                    <div jsaction="JIbuQc:i6JJe" jsname="i6JJe"
                                                        class="hWUu9 COriJb n1lOjd"><button
                                                            class="VfPpkd-BIzmGd SaBhMc NNFoTc zI3eKe N7pe4e PcY7Ff DpB3re"
                                                            jscontroller="soHxf"
                                                            jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                            data-idom-class="SaBhMc NNFoTc zI3eKe N7pe4e PcY7Ff DpB3re"
                                                            aria-label="Siguiente"><span aria-hidden="true"
                                                                class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                                            <div class="VfPpkd-wbSZ0b"></div>
                                                            <div class="VfPpkd-kLizxb-LhBDec"></div><span
                                                                class="VfPpkd-Q0XOV"><i
                                                                    class="google-material-icons B1yxdb"
                                                                    aria-hidden="true">chevron_right</i></span>
                                                        </button></div>
                                                </div>
                                            </div>
                                            <c-data id="c577" jsdata=" W902Ue;_;$795"></c-data>
                                        </c-wiz>
                                        <c-wiz c-wiz="" jsrenderer="JiSSTb" jsshadow="" jsdata="deferred-c578"
                                            data-p="%.@.]" data-node-index="6;0" autoupdate="" jsmodel="hc6Ubd">
                                            <div jscontroller="lpwuxb" jsaction="hdtuG:CnOdef">
                                                <section jsshadow="" class="HcyOxe" jscontroller="NkbkFd">
                                                    <header class=" cswwxf">
                                                        <div class="VMq4uf">
                                                            <div class="EaMWib">
                                                                <h2 class="XfZNbf">Sobre este aplicativo</h2>
                                                            </div>
                                                            <div jsaction="JIbuQc:trigger.hdtuG"><button
                                                                    class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ QDwDD mN1ivc VxpoF"
                                                                    jscontroller="soHxf"
                                                                    jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                                    data-idom-class="yHy1rc eT1oJ QDwDD mN1ivc VxpoF"
                                                                    aria-label="See more information on About this app">
                                                                    <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc">
                                                                    </div>
                                                                    <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div><i
                                                                        class="google-material-icons VfPpkd-kBDsod W7A5Qb"
                                                                        aria-hidden="true">arrow_forward</i>
                                                                </button></div>
                                                        </div>
                                                    </header>
                                                    <div jsslot="" class="SfzRHd">
                                                        <div class="bARER" data-g-id="description">
                                                            <?php echo htmlspecialchars($app['app_description']); ?>
                                                        </div>
                                                        <div class="TKjAsc">
                                                            <div>
                                                                <div class="lXlx5">Última atualização</div>
                                                                <div class="xg1aie">
                                                                    <?php
                                                                        // Assuming $app['created_at'] contains a valid date string like '2024-10-14 10:54:17'
                                                                        $createdAt = new DateTime($app['created_at']);
                                                                        // Format 2: Mar 20, 2024
                                                                        echo "<br>" . $createdAt->format('M d, Y');
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Uc6QCc">
                                                            <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb"
                                                                data-is-touch-wrapper="true"><button
                                                                    class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-INsAgc VfPpkd-LgbsSe-OWXEXe-dgl2Hf Rj2Mlf OLiIxf PDpWxe P62QJc LQeN7 LMoCf"
                                                                    jscontroller="soHxf"
                                                                    jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                                    data-idom-class="Rj2Mlf OLiIxf PDpWxe P62QJc LQeN7 LMoCf"
                                                                    disabled="">
                                                                    <div class="VfPpkd-Jh9lGc"></div>
                                                                    <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                                                                    <div class="VfPpkd-RLmnJb"></div><span
                                                                        jsname="V67aGc" class="VfPpkd-vQzf8d">#1 top en
                                                                        Segurança</span>
                                                                </button></div>
                                                            <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb"
                                                                data-is-touch-wrapper="true">
                                                                <div class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-INsAgc VfPpkd-LgbsSe-OWXEXe-dgl2Hf Rj2Mlf OLiIxf PDpWxe P62QJc LQeN7 LMoCf"
                                                                    jscontroller="nKuFpb"
                                                                    jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                                    data-idom-class="Rj2Mlf OLiIxf PDpWxe P62QJc LQeN7 LMoCf"
                                                                    itemprop="genre">
                                                                    <div class="VfPpkd-Jh9lGc"></div><span
                                                                        jsname="V67aGc" class="VfPpkd-vQzf8d"
                                                                        aria-hidden="true">Melhores aplicativos</span><a
                                                                        jsname="hSRGPd"
                                                                        class="WpHeLc VfPpkd-mRLv6 VfPpkd-RLmnJb"
                                                                        href="https://play.google.com/store/apps/category/PARENTING"
                                                                        aria-label="Ser padres"></a>
                                                                    <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </c-wiz>


                                        <c-wiz c-wiz="" jsrenderer="QxNhAd" jslog="144114; 1:1906;track:impression;"
                                            jsshadow="" jsdata="deferred-c310"
                                            data-p="%.@.[&quot;com.microsoft.familysafety&quot;,7]]"
                                            data-node-index="12;0" jsmodel="hc6Ubd">
                                            <section jsshadow="" class="HcyOxe" jscontroller="NkbkFd">
                                                <header class=" cswwxf">
                                                    <div class="VMq4uf">
                                                        <div class="EaMWib">
                                                            <h2 class="XfZNbf">Segurança de dados</h2>
                                                        </div>
                                                        <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ QDwDD mN1ivc VxpoF"
                                                            jscontroller="nKuFpb"
                                                            jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                            data-idom-class="yHy1rc eT1oJ QDwDD mN1ivc VxpoF"
                                                            jslog="144113; 1:1907;track:click;">
                                                            <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><i
                                                                class="google-material-icons VfPpkd-kBDsod W7A5Qb"
                                                                aria-hidden="true">arrow_forward</i><a jsname="hSRGPd"
                                                                class="WpHeLc VfPpkd-mRLv6"
                                                                href="/store/apps/datasafety?id=com.microsoft.familysafety"
                                                                aria-label="See more information on Data safety"></a>
                                                            <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                                        </div>
                                                    </div>
                                                </header>
                                                <div jsslot="" class="SfzRHd">A segurança começa com a compreensão de
                                                    como os desenvolvedores coletam e compartilham seus dados. As
                                                    práticas de privacidade e segurança de dados podem variar com base
                                                    no seu uso, região e idade. O desenvolvedor forneceu essas
                                                    informações e pode atualizá-las ao longo do tempo.<div
                                                        class="XGHsbd">
                                                        <div class="wGcURe"><img
                                                                src="https://play-lh.googleusercontent.com/iFstqoxDElUVv4T3KxkxP3OTcuFvWF5ZQQjT7aIxy4n2uaVigCCykxeG6EZV9FQ10X1itPj1oORm=s20-rw"
                                                                srcset="https://play-lh.googleusercontent.com/iFstqoxDElUVv4T3KxkxP3OTcuFvWF5ZQQjT7aIxy4n2uaVigCCykxeG6EZV9FQ10X1itPj1oORm=s40-rw 2x"
                                                                class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                                                data-iml="26046.80000001192">
                                                            <div>Nenhum dado compartilhado com terceiros<div
                                                                    class="jECfAf"><a
                                                                        href="https://support.google.com/googleplay?p=data-safety&amp;hl=en"
                                                                        target="_blank">Saiba mais</a> sobre como os
                                                                    desenvolvedores declaram compartilhamento</div>
                                                            </div>
                                                        </div>
                                                        <div class="wGcURe"><img
                                                                src="https://play-lh.googleusercontent.com/12USW7aflgz466ifDehKTnMoAep_VHxDmKJ6jEBoDZWCSefOC-ThRX14Mqe0r8KF9XCzrpMqJts=s20-rw"
                                                                srcset="https://play-lh.googleusercontent.com/12USW7aflgz466ifDehKTnMoAep_VHxDmKJ6jEBoDZWCSefOC-ThRX14Mqe0r8KF9XCzrpMqJts=s40-rw 2x"
                                                                class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                                                data-iml="26046.80000001192">
                                                            <div>Este aplicativo pode coletar esses tipos de dados<div
                                                                    class="jECfAf">Localização, informações pessoais e 3
                                                                    outros
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wGcURe"><img
                                                                src="https://play-lh.googleusercontent.com/W5DPtvB8Fhmkn5LbFZki_OHL3ZI1Rdc-AFul19UK4f7np2NMjLE5QquD6H0HAeEJ977u3WH4yaQ=s20-rw"
                                                                srcset="https://play-lh.googleusercontent.com/W5DPtvB8Fhmkn5LbFZki_OHL3ZI1Rdc-AFul19UK4f7np2NMjLE5QquD6H0HAeEJ977u3WH4yaQ=s40-rw 2x"
                                                                class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                                                data-iml="26046.90000000596">
                                                            <div>Os dados são criptografados em trânsito</div>
                                                        </div>
                                                        <div class="wGcURe"><img
                                                                src="https://play-lh.googleusercontent.com/ohRyQRA9rNfhp7xLW0MtW1soD8SEX45Oec7MyH3FaxtukWUG_6GKVpvh3JiugzryLi7Bia02HPw=s20-rw"
                                                                srcset="https://play-lh.googleusercontent.com/ohRyQRA9rNfhp7xLW0MtW1soD8SEX45Oec7MyH3FaxtukWUG_6GKVpvh3JiugzryLi7Bia02HPw=s40-rw 2x"
                                                                class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                                                data-iml="26046.90000000596">
                                                            <div>Você pode solicitar que os dados sejam excluídos</div>
                                                        </div>
                                                        <div class="u4ICaf">
                                                            <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb"
                                                                data-is-touch-wrapper="true">
                                                                <div class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 aLey0c qQhJce"
                                                                    jscontroller="nKuFpb"
                                                                    jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                                    data-disable-idom="true"
                                                                    jslog="144115; 1:1908; track:click;">
                                                                    <div class="VfPpkd-Jh9lGc"></div><span
                                                                        jsname="V67aGc" class="VfPpkd-vQzf8d"
                                                                        aria-hidden="true">See details</span><a
                                                                        jsname="hSRGPd"
                                                                        class="WpHeLc VfPpkd-mRLv6 VfPpkd-RLmnJb"
                                                                        href="/store/apps/datasafety?id=com.microsoft.familysafety"
                                                                        aria-label="See more details on data safety"></a>
                                                                    <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <c-data id="c310" jsdata=" kXATVe;_;$337 ybgdZd;_;$338 GU61mf;_;$339">
                                            </c-data>
                                        </c-wiz>


                                        <c-wiz c-wiz="" jsrenderer="QxNhAd" jsshadow="" jsdata="deferred-c580"
                                            data-p="%.@.[org.findmykids.app,7]]" data-node-index="12;0"
                                            jsmodel="hc6Ubd">

                                        </c-wiz>
                                        <c-wiz c-wiz="" jsrenderer="C7s1K" jsshadow="" jsdata="deferred-c581"
                                            data-p="%.@.[org.findmykids.app,7],null,null,null,2,null,null,52]"
                                            jscontroller="zBPctc" jsaction="hdtuG:OmtWsd" data-node-index="13;0"
                                            autoupdate="" jsmodel="hc6Ubd">
                                            <section jsshadow="" class="HcyOxe" jscontroller="NkbkFd">

                                                <div jsslot="" class="SfzRHd">

                                                    <div class="Jwxk6d" data-g-id="reviews">
                                                        <div class="HJV0ef">
                                                            <div class="P4w39d">
                                                                <div class="Te9Tpc">
                                                                    <div>
                                                                        <div class="jILTFe">4,8</div>
                                                                        <div role="img"
                                                                            aria-label="Valoración: 4,8 estrellas de cinco"
                                                                            class="I26one"><span aria-hidden="true"
                                                                                jsname="fI6EEc" class="deXnLd"
                                                                                data-number="1"><span class="Z1Dz7b"
                                                                                    aria-hidden="true"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path
                                                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                        </path>
                                                                                    </svg></span></span><span
                                                                                aria-hidden="true" jsname="fI6EEc"
                                                                                class="deXnLd" data-number="2"><span
                                                                                    class="Z1Dz7b"
                                                                                    aria-hidden="true"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path
                                                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                        </path>
                                                                                    </svg></span></span><span
                                                                                aria-hidden="true" jsname="fI6EEc"
                                                                                class="deXnLd" data-number="3"><span
                                                                                    class="Z1Dz7b"
                                                                                    aria-hidden="true"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path
                                                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                        </path>
                                                                                    </svg></span></span><span
                                                                                aria-hidden="true" jsname="fI6EEc"
                                                                                class="deXnLd" data-number="4"><span
                                                                                    class="Z1Dz7b"
                                                                                    aria-hidden="true"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path
                                                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                        </path>
                                                                                    </svg></span></span><span
                                                                                aria-hidden="true" jsname="fI6EEc"
                                                                                class="deXnLd" data-number="5"><span
                                                                                    class="" aria-hidden="true"><svg
                                                                                        class="xdPrrd"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="url(#c582)">
                                                                                        <defs>
                                                                                            <lineargradient id="c582">
                                                                                                <stop stop-opacity="1"
                                                                                                    offset="50%"
                                                                                                    class="Z1Dz7b">
                                                                                                </stop>
                                                                                                <stop stop-opacity="1"
                                                                                                    offset="50%"
                                                                                                    class="Wi7KIe">
                                                                                                </stop>
                                                                                            </lineargradient>
                                                                                        </defs>
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path d="M0 0h24v24H0z"
                                                                                            fill="none"></path>
                                                                                        <path
                                                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                        </path>
                                                                                    </svg></span></span></div>
                                                                        <div class="EHUI5b">1,58M avaliações
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="JzwBgb" role="img"
                                                                            aria-label="1.411.436 reseñas de la valoración por estrellas (5)">
                                                                            <div aria-hidden="true" class="Qjdn7d">5
                                                                            </div>
                                                                            <div aria-hidden="true" class="RJfYGf">
                                                                                <div class="RutFAf wcB8se"
                                                                                    title="1.411.436"
                                                                                    style="width: 89.3052%;"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="JzwBgb" role="img"
                                                                            aria-label="99.411 reseñas de la valoración por estrellas (4)">
                                                                            <div aria-hidden="true" class="Qjdn7d">4
                                                                            </div>
                                                                            <div aria-hidden="true" class="RJfYGf">
                                                                                <div class="RutFAf wcB8se"
                                                                                    title="99.411"
                                                                                    style="width: 6.28999%;"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="JzwBgb" role="img"
                                                                            aria-label="33.474 reseñas de la valoración por estrellas (3)">
                                                                            <div aria-hidden="true" class="Qjdn7d">3
                                                                            </div>
                                                                            <div aria-hidden="true" class="RJfYGf">
                                                                                <div class="RutFAf wcB8se"
                                                                                    title="33.474"
                                                                                    style="width: 2.11799%;"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="JzwBgb" role="img"
                                                                            aria-label="11.690 reseñas de la valoración por estrellas (2)">
                                                                            <div aria-hidden="true" class="Qjdn7d">2
                                                                            </div>
                                                                            <div aria-hidden="true" class="RJfYGf">
                                                                                <div class="RutFAf wcB8se"
                                                                                    title="11.690"
                                                                                    style="width: 0.739657%;"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="JzwBgb" role="img"
                                                                            aria-label="24.406 reseñas de la valoración por estrellas (1)">
                                                                            <div aria-hidden="true" class="Qjdn7d">1
                                                                            </div>
                                                                            <div aria-hidden="true" class="RJfYGf">
                                                                                <div class="RutFAf wcB8se"
                                                                                    title="24.406"
                                                                                    style="width: 1.54423%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="EGFGHd">
                                                            <header class="c1bOId" jsaction="rcuQ6b:SIRhf"
                                                                jscontroller="j9sf1"
                                                                data-review-id="3a2eb357-cd23-4fcc-bcfa-974972eb0c1e">
                                                                <div class="YNR7H">
                                                                    <div class="gSGphe"><img src="img/a.png"
                                                                            class="T75of abYEib" aria-hidden="true"
                                                                            loading="lazy">
                                                                        <div class="X5PpBb">Andrés MR</div>
                                                                    </div>
                                                                    <div jsaction="FzgWvd:uXu05d">
                                                                        <div jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);xDliB:oNPcuf;SM8mFd:li9Srb;iFFCZc:NSsOUb;Rld2oe:NSsOUb"
                                                                            jsshadow=""
                                                                            class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd"
                                                                            jscontroller="wg1P6b" jsname="L2ufaf"
                                                                            data-disable-idom="true">
                                                                            <div jsname="WjL7X" jsslot=""><button
                                                                                    class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc"
                                                                                    jscontroller="soHxf"
                                                                                    jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                                                    data-disable-idom="true"
                                                                                    aria-label="Más acciones de la reseña"
                                                                                    aria-expanded="false"
                                                                                    aria-haspopup="menu"
                                                                                    aria-controls="UM33ifc585">
                                                                                    <div jsname="s3Eaab"
                                                                                        class="VfPpkd-Bz112c-Jh9lGc">
                                                                                    </div>
                                                                                    <div
                                                                                        class="VfPpkd-Bz112c-J1Ukfc-LhBDec">
                                                                                    </div><i
                                                                                        class="material-icons-extended VfPpkd-kBDsod"
                                                                                        aria-hidden="true">more_vert</i>
                                                                                </button></div>
                                                                            <div jsname="U0exHf" jsslot="">
                                                                                <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob q6oraf P77izf B6Yvkd"
                                                                                    jscontroller="ywOR5c"
                                                                                    jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb)"
                                                                                    data-is-hoisted="false"
                                                                                    data-should-flip-corner-horizontally="false"
                                                                                    data-stay-in-viewport="false"
                                                                                    data-disable-idom="true"
                                                                                    id="UM33ifc585"
                                                                                    data-menu-uid="ucc-5">
                                                                                    <ul class="VfPpkd-StrnGf-rymPhb DMZ54e"
                                                                                        jsname="rymPhb"
                                                                                        jscontroller="PHUIyb"
                                                                                        jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le"
                                                                                        role="menu" tabindex="-1"
                                                                                        aria-label="Más acciones de la reseña"
                                                                                        data-disable-idom="true"><span
                                                                                            aria-hidden="true"
                                                                                            class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                                                                        <li class="bO7Z3c VfPpkd-StrnGf-rymPhb-ibnC6b"
                                                                                            jsaction=" keydown:RDtNu; keyup:JdS61c; click:o6ZaF; mousedown:teoBgf; mouseup:NZPHBc; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8;focusin:MeMJlc; focusout:bkTmIf;mouseenter:SKyDAe; change:uOgbud"
                                                                                            role="menuitem"
                                                                                            tabindex="-1"
                                                                                            data-option="2"><span
                                                                                                class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span
                                                                                                class="VfPpkd-StrnGf-rymPhb-Zmlebc-LhBDec"></span><span
                                                                                                jsname="K4r5Ff"
                                                                                                class="VfPpkd-StrnGf-rymPhb-b9t22c">Marcar
                                                                                                como inapropiada</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="Jx4nYe">
                                                                    <div role="img"
                                                                        aria-label="Valoración: 5 estrellas de cinco"
                                                                        class="iXRFPc"><span aria-hidden="true"
                                                                            jsname="fI6EEc" class="F7XJmb"
                                                                            data-number="1"><span class="Z1Dz7b"
                                                                                aria-hidden="true"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            aria-hidden="true" jsname="fI6EEc"
                                                                            class="F7XJmb" data-number="2"><span
                                                                                class="Z1Dz7b" aria-hidden="true"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            aria-hidden="true" jsname="fI6EEc"
                                                                            class="F7XJmb" data-number="3"><span
                                                                                class="Z1Dz7b" aria-hidden="true"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            aria-hidden="true" jsname="fI6EEc"
                                                                            class="F7XJmb" data-number="4"><span
                                                                                class="Z1Dz7b" aria-hidden="true"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                    </path>
                                                                                </svg></span></span><span
                                                                            aria-hidden="true" jsname="fI6EEc"
                                                                            class="F7XJmb" data-number="5"><span
                                                                                class="Z1Dz7b" aria-hidden="true"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path d="M0 0h24v24H0z" fill="none">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                                                                    </path>
                                                                                </svg></span></span></div><span
                                                                        class="bp9Aid">29 de setembro de 2024</span>
                                                                </div>
                                                            </header>
                                                            <div class="h3YV2d">
                                                                <?php echo htmlspecialchars($app['app_text']); ?>
                                                                .</div>
                                                            <div jscontroller="SWD8cc"
                                                                data-review-id="3a2eb357-cd23-4fcc-bcfa-974972eb0c1e"
                                                                data-original-thumbs-up-count="3">
                                                                <div class="AJTPZc" jsname="J0d7Yd">10000 pessoas
                                                                    marcaram como util</div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>


                                    </div>
                                </div>

                                <div class="o45e4d">
                                    <c-wiz c-wiz="" jsrenderer="Grlxwe" jsshadow="" jsdata="deferred-c317"
                                        data-p="%.@.1,1]" data-node-index="9;0" autoupdate="" jsmodel="hc6Ubd">
                                        <section jsshadow="" class="HcyOxe" jscontroller="NkbkFd">
                                            <header class=" cswwxf">
                                                <div class="VMq4uf" id="developer-contacts-heading">
                                                    <div class="EaMWib">
                                                        <h2 class="XfZNbf">Suporte de aplicativo</h2>
                                                    </div>
                                                    <div jsaction="JIbuQc:Ptdedd"><button
                                                            class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc VxpoF"
                                                            jscontroller="soHxf"
                                                            jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                            data-idom-class="yHy1rc eT1oJ mN1ivc VxpoF"
                                                            aria-label="Collapse" aria-controls="developer-contacts"
                                                            aria-expanded="true"
                                                            style="--mdc-ripple-fg-size: 28px; --mdc-ripple-fg-scale: 1.7142857142857142; --mdc-ripple-left: 10px; --mdc-ripple-top: 10px;">
                                                            <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div>
                                                            <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div><i
                                                                class="google-material-icons VfPpkd-kBDsod W7A5Qb"
                                                                aria-hidden="true">expand_less</i>
                                                        </button></div>
                                                </div>
                                            </header>
                                            <div jsslot="" class="SfzRHd" role="region" id="developer-contacts"
                                                aria-labelledby="developer-contacts-heading">
                                                <div class="vfQhrf BxIr0d">
                                                    <div
                                                        class="VfPpkd-WsjYwc VfPpkd-WsjYwc-OWXEXe-INsAgc KC1dQ Usd1Ac AaN0Dd  VVmwY">
                                                        <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                            class="VfPpkd-EScbFb-JIbuQc" jscontroller="tKHFxf"><a
                                                                class="Si6A0c RrSxVb" target="_blank" href="#"
                                                                aria-label="Website https://www.microsoft.com/en-us/microsoft-365/family-safety will open in a new window or tab."><i
                                                                    class="google-material-icons j25Vu"
                                                                    aria-hidden="true">public</i>
                                                                <div class="pZ8Djf">
                                                                    <div class="xFVDSb">Site</div>
                                                                </div>
                                                            </a>
                                                            <div class="VfPpkd-FJ5hab"></div>
                                                        </div><span aria-hidden="true"
                                                            class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                                    </div>
                                                    <div
                                                        class="VfPpkd-WsjYwc VfPpkd-WsjYwc-OWXEXe-INsAgc KC1dQ Usd1Ac AaN0Dd  VVmwY">
                                                        <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                            class="VfPpkd-EScbFb-JIbuQc" jscontroller="tKHFxf"><a
                                                                class="Si6A0c RrSxVb" target="_blank" href="#"
                                                                aria-label="Support email mailto:adminApp@microsoft.com will open in a new window or tab."><i
                                                                    class="google-material-icons j25Vu"
                                                                    aria-hidden="true">email</i>
                                                                <div class="pZ8Djf">
                                                                    <div class="xFVDSb">E-mail de suporte</div>
                                                                    <div class="pSEeg">
                                                                        adminApp@microsoft.com</div>
                                                                </div>
                                                            </a>
                                                            <div class="VfPpkd-FJ5hab"></div>
                                                        </div><span aria-hidden="true"
                                                            class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                                    </div>
                                                    <div
                                                        class="VfPpkd-WsjYwc VfPpkd-WsjYwc-OWXEXe-INsAgc KC1dQ Usd1Ac AaN0Dd  VVmwY">
                                                        <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                            class="VfPpkd-EScbFb-JIbuQc" jscontroller="tKHFxf"><a
                                                                class="Si6A0c RrSxVb" target="_blank"
                                                                href="https://maps.google.com/?q=One%20Microsoft%20Way"
                                                                aria-label="Address https://maps.google.com/?q=One Microsoft Way will open in a new window or tab."><i
                                                                    class="google-material-icons j25Vu"
                                                                    aria-hidden="true">place</i>
                                                                <div class="pZ8Djf">
                                                                    <div class="xFVDSb">Endereço</div>
                                                                    <div class="pSEeg">One Microsoft Way</div>
                                                                </div>
                                                            </a>
                                                            <div class="VfPpkd-FJ5hab"></div>
                                                        </div><span aria-hidden="true"
                                                            class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                                    </div>
                                                    <div
                                                        class="VfPpkd-WsjYwc VfPpkd-WsjYwc-OWXEXe-INsAgc KC1dQ Usd1Ac AaN0Dd  VVmwY">
                                                        <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                            class="VfPpkd-EScbFb-JIbuQc" jscontroller="tKHFxf"><a
                                                                class="Si6A0c RrSxVb" target="_blank"
                                                                href="https://privacy.microsoft.com/en-us/privacystatement"
                                                                aria-label="Privacy Policy https://privacy.microsoft.com/en-us/privacystatement will open in a new window or tab."><i
                                                                    class="google-material-icons j25Vu"
                                                                    aria-hidden="true">shield</i>
                                                                <div class="pZ8Djf">
                                                                    <div class="xFVDSb">Privacy Policy</div>
                                                                </div>
                                                            </a>
                                                            <div class="VfPpkd-FJ5hab"></div>
                                                        </div><span aria-hidden="true"
                                                            class="VfPpkd-BFbNVe-bF1uUb NZp2ef"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <c-data id="c317" jsdata=" W902Ue;_;$348"></c-data>
                                    </c-wiz>
                                    <c-wiz c-wiz="" jsrenderer="G2gJT" jsshadow="" jsdata="deferred-c318" data-p="%.@.]"
                                        data-node-index="14;0" jsmodel="hc6Ubd">
                                        <section jsshadow="" class="HcyOxe" jscontroller="NkbkFd">
                                            <header class=" cswwxf">
                                                <div class="VMq4uf">
                                                    <div class="EaMWib">
                                                        <h2 class="XfZNbf"><span>Aplicativos semelhantes</span></h2>
                                                    </div>
                                                    <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ QDwDD mN1ivc VxpoF"
                                                        jscontroller="nKuFpb"
                                                        jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd"
                                                        data-idom-class="yHy1rc eT1oJ QDwDD mN1ivc VxpoF">
                                                        <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><i
                                                            class="google-material-icons VfPpkd-kBDsod W7A5Qb"
                                                            aria-hidden="true">arrow_forward</i><a jsname="hSRGPd"
                                                            class="WpHeLc VfPpkd-mRLv6"
                                                            href="/store/apps/collection/cluster?gsr=SnRqGHBrWVpUR2w3ekJtb0NOTHFWNERuTHc9PcICVwoeChpjb20ubWljcm9zb2Z0LmZhbWlseXNhZmV0eRAHGAgwATgASikIARABEAIQAxAEGhdNaWNyb3NvZnQgRmFtaWx5IFNhZmV0eSAAKAAwAFAAWAFgAA%3D%3D:S:ANO1ljIEriE"
                                                            aria-label="See more information on Similar apps"></a>
                                                        <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                                    </div>
                                                </div>
                                            </header>
                                            <div jsslot="" class="SfzRHd">
                                                <div class="ErwGJf fD2Paf">
                                                    <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                        class="VfPpkd-EScbFb-JIbuQc fUtUMc" jscontroller="tKHFxf"><a
                                                            class="Si6A0c nT2RTe"
                                                            href="/store/apps/details?id=com.microsoft.xboxfamily"
                                                            jslog="38003; 1:500|qgJjGmEIABIgCh4KGGNvbS5taWNyb3NvZnQueGJveGZhbWlseRABGANKEwiFyaOFuo6JAxU0yhYFHQ5PDZCaARMIhcmjhbqOiQMVNMoWBR0OTw2Q+gEPCg0IABIJCgVlbi1VUxAA; track:click,impression">
                                                            <div class="j2FCNc cQv9D"><img
                                                                    src="https://play-lh.googleusercontent.com/HvxA6jTYZiW7g1W3gI1pGhT8etNJJYuf3Ao_cBTMu4l4Uv5uI_xwnolPSBCt5HVKO9U=s64-rw"
                                                                    srcset="https://play-lh.googleusercontent.com/HvxA6jTYZiW7g1W3gI1pGhT8etNJJYuf3Ao_cBTMu4l4Uv5uI_xwnolPSBCt5HVKO9U=s128-rw 2x"
                                                                    class="T75of stzEZd" aria-hidden="true"
                                                                    alt="Thumbnail image" loading="lazy">
                                                                <div class="cXFu1">
                                                                    <div class="ubGTjb"><span class="DdYX5">Xbox Family
                                                                            Settings</span></div>
                                                                    <div class="ubGTjb"><span class="wMUdtb">Microsoft
                                                                            Corporation</span></div>
                                                                    <div class="ubGTjb">
                                                                        <div aria-label="Rated 4.0 stars out of five stars"
                                                                            style="display: inline-flex; align-items: center;">
                                                                            <span class="w2kbF">4.0</span><span
                                                                                class="Q4fJQd"><i
                                                                                    class="google-material-icons Yvy3Fd"
                                                                                    aria-hidden="true">star</i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="VfPpkd-FJ5hab"></div>
                                                    </div>
                                                    <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                        class="VfPpkd-EScbFb-JIbuQc fUtUMc" jscontroller="tKHFxf"><a
                                                            class="Si6A0c nT2RTe"
                                                            href="/store/apps/details?id=com.microsoft.amp.apps.bingnews"
                                                            jslog="38003; 1:500|qgJqGmgIARInCiUKH2NvbS5taWNyb3NvZnQuYW1wLmFwcHMuYmluZ25ld3MQARgDShMIhcmjhbqOiQMVNMoWBR0OTw2QmgETCIXJo4W6jokDFTTKFgUdDk8NkPoBDwoNCAASCQoFZW4tVVMQAA==; track:click,impression">
                                                            <div class="j2FCNc cQv9D"><img
                                                                    src="https://play-lh.googleusercontent.com/UJ30yiWUe0-y1UzPCwMPRsKmAvcC4Q_tMlvL413TRPg0ySO1YhAlwBTbxMsJElGmAzx_=s64-rw"
                                                                    srcset="https://play-lh.googleusercontent.com/UJ30yiWUe0-y1UzPCwMPRsKmAvcC4Q_tMlvL413TRPg0ySO1YhAlwBTbxMsJElGmAzx_=s128-rw 2x"
                                                                    class="T75of stzEZd" aria-hidden="true"
                                                                    alt="Thumbnail image" loading="lazy">
                                                                <div class="cXFu1">
                                                                    <div class="ubGTjb"><span class="DdYX5">Microsoft
                                                                            Start: News &amp; more</span></div>
                                                                    <div class="ubGTjb"><span class="wMUdtb">Microsoft
                                                                            Corporation</span></div>
                                                                    <div class="ubGTjb">
                                                                        <div aria-label="Rated 4.2 stars out of five stars"
                                                                            style="display: inline-flex; align-items: center;">
                                                                            <span class="w2kbF">4.2</span><span
                                                                                class="Q4fJQd"><i
                                                                                    class="google-material-icons Yvy3Fd"
                                                                                    aria-hidden="true">star</i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="VfPpkd-FJ5hab"></div>
                                                    </div>
                                                    <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                        class="VfPpkd-EScbFb-JIbuQc fUtUMc" jscontroller="tKHFxf"><a
                                                            class="Si6A0c nT2RTe"
                                                            href="/store/apps/details?id=com.microsoft.intune"
                                                            jslog="38003; 1:500|qgJfGl0IAhIcChoKFGNvbS5taWNyb3NvZnQuaW50dW5lEAEYA0oTCIXJo4W6jokDFTTKFgUdDk8NkJoBEwiFyaOFuo6JAxU0yhYFHQ5PDZD6AQ8KDQgAEgkKBWVuLVVTEAA=; track:click,impression">
                                                            <div class="j2FCNc cQv9D"><img
                                                                    src="https://play-lh.googleusercontent.com/9jqnFF6rpeGZx92dyWCjfUocVSEI8D_elLj6IDRb_qko4nTwwQ_8QHW8mUQ3l3vkFTvi=s64-rw"
                                                                    srcset="https://play-lh.googleusercontent.com/9jqnFF6rpeGZx92dyWCjfUocVSEI8D_elLj6IDRb_qko4nTwwQ_8QHW8mUQ3l3vkFTvi=s128-rw 2x"
                                                                    class="T75of stzEZd" aria-hidden="true"
                                                                    alt="Thumbnail image" loading="lazy">
                                                                <div class="cXFu1">
                                                                    <div class="ubGTjb"><span class="DdYX5">Microsoft
                                                                            Intune</span></div>
                                                                    <div class="ubGTjb"><span class="wMUdtb">Microsoft
                                                                            Corporation</span></div>
                                                                    <div class="ubGTjb">
                                                                        <div aria-label="Rated 3.9 stars out of five stars"
                                                                            style="display: inline-flex; align-items: center;">
                                                                            <span class="w2kbF">3.9</span><span
                                                                                class="Q4fJQd"><i
                                                                                    class="google-material-icons Yvy3Fd"
                                                                                    aria-hidden="true">star</i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="VfPpkd-FJ5hab"></div>
                                                    </div>
                                                    <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                        class="VfPpkd-EScbFb-JIbuQc fUtUMc" jscontroller="tKHFxf"><a
                                                            class="Si6A0c nT2RTe"
                                                            href="/store/apps/details?id=com.microsoft.rdc.androidx"
                                                            jslog="38003; 1:500|qgJlGmMIAxIiCiAKGmNvbS5taWNyb3NvZnQucmRjLmFuZHJvaWR4EAEYA0oTCIXJo4W6jokDFTTKFgUdDk8NkJoBEwiFyaOFuo6JAxU0yhYFHQ5PDZD6AQ8KDQgAEgkKBWVuLVVTEAA=; track:click,impression">
                                                            <div class="j2FCNc cQv9D"><img
                                                                    src="https://play-lh.googleusercontent.com/swfNDX3jEjWj_jvAOyv-ifeggaySH1AViujt9XDQfWXxn1lFT8XRRCZ2bngYo_KmrA=s64-rw"
                                                                    srcset="https://play-lh.googleusercontent.com/swfNDX3jEjWj_jvAOyv-ifeggaySH1AViujt9XDQfWXxn1lFT8XRRCZ2bngYo_KmrA=s128-rw 2x"
                                                                    class="T75of stzEZd" aria-hidden="true"
                                                                    alt="Thumbnail image" loading="lazy">
                                                                <div class="cXFu1">
                                                                    <div class="ubGTjb"><span class="DdYX5">Remote
                                                                            Desktop</span></div>
                                                                    <div class="ubGTjb"><span class="wMUdtb">Microsoft
                                                                            Corporation</span></div>
                                                                    <div class="ubGTjb">
                                                                        <div aria-label="Rated 3.5 stars out of five stars"
                                                                            style="display: inline-flex; align-items: center;">
                                                                            <span class="w2kbF">3.5</span><span
                                                                                class="Q4fJQd"><i
                                                                                    class="google-material-icons Yvy3Fd"
                                                                                    aria-hidden="true">star</i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="VfPpkd-FJ5hab"></div>
                                                    </div>
                                                    <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                        class="VfPpkd-EScbFb-JIbuQc fUtUMc" jscontroller="tKHFxf"><a
                                                            class="Si6A0c nT2RTe"
                                                            href="/store/apps/details?id=com.microsoft.ipviewer"
                                                            jslog="38003; 1:500|qgJhGl8IBBIeChwKFmNvbS5taWNyb3NvZnQuaXB2aWV3ZXIQARgDShMIhcmjhbqOiQMVNMoWBR0OTw2QmgETCIXJo4W6jokDFTTKFgUdDk8NkPoBDwoNCAASCQoFZW4tVVMQAA==; track:click,impression">
                                                            <div class="j2FCNc cQv9D"><img
                                                                    src="https://play-lh.googleusercontent.com/2lyT8Tpzb-rCAtN4zGlnFitLQylRJddOIP1rLUf8IN4KVGjyGKhQLVjJLCT0as8SIQ8=s64-rw"
                                                                    srcset="https://play-lh.googleusercontent.com/2lyT8Tpzb-rCAtN4zGlnFitLQylRJddOIP1rLUf8IN4KVGjyGKhQLVjJLCT0as8SIQ8=s128-rw 2x"
                                                                    class="T75of stzEZd" aria-hidden="true"
                                                                    alt="Thumbnail image" loading="lazy">
                                                                <div class="cXFu1">
                                                                    <div class="ubGTjb"><span class="DdYX5">Azure
                                                                            Information Protection</span></div>
                                                                    <div class="ubGTjb"><span class="wMUdtb">Microsoft
                                                                            Corporation</span></div>
                                                                    <div class="ubGTjb">
                                                                        <div aria-label="Rated 3.7 stars out of five stars"
                                                                            style="display: inline-flex; align-items: center;">
                                                                            <span class="w2kbF">3.7</span><span
                                                                                class="Q4fJQd"><i
                                                                                    class="google-material-icons Yvy3Fd"
                                                                                    aria-hidden="true">star</i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="VfPpkd-FJ5hab"></div>
                                                    </div>
                                                    <div jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef"
                                                        class="VfPpkd-EScbFb-JIbuQc fUtUMc" jscontroller="tKHFxf"><a
                                                            class="Si6A0c nT2RTe"
                                                            href="/store/apps/details?id=com.microsoft.launcher.enterprise"
                                                            jslog="38003; 1:500|qgJsGmoIBRIpCicKIWNvbS5taWNyb3NvZnQubGF1bmNoZXIuZW50ZXJwcmlzZRABGANKEwiFyaOFuo6JAxU0yhYFHQ5PDZCaARMIhcmjhbqOiQMVNMoWBR0OTw2Q+gEPCg0IABIJCgVlbi1VUxAA; track:click,impression">
                                                            <div class="j2FCNc cQv9D"><img
                                                                    src="https://play-lh.googleusercontent.com/iIX-mNqnD2f8v5eroETe6gdWkGl4KoYOPW-oI2SsUCkIFGsRqSVXRFcni-atW9wjilBf=s64-rw"
                                                                    srcset="https://play-lh.googleusercontent.com/iIX-mNqnD2f8v5eroETe6gdWkGl4KoYOPW-oI2SsUCkIFGsRqSVXRFcni-atW9wjilBf=s128-rw 2x"
                                                                    class="T75of stzEZd" aria-hidden="true"
                                                                    alt="Thumbnail image" loading="lazy">
                                                                <div class="cXFu1">
                                                                    <div class="ubGTjb"><span class="DdYX5">Managed Home
                                                                            Screen</span></div>
                                                                    <div class="ubGTjb"><span class="wMUdtb">Microsoft
                                                                            Corporation</span></div>
                                                                    <div class="ubGTjb">
                                                                        <div aria-label="Rated 5.0 stars out of five stars"
                                                                            style="display: inline-flex; align-items: center;">
                                                                            <span class="w2kbF">5.0</span><span
                                                                                class="Q4fJQd"><i
                                                                                    class="google-material-icons Yvy3Fd"
                                                                                    aria-hidden="true">star</i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="VfPpkd-FJ5hab"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <c-data id="c318" jsdata=" LK9wFf;;$349"></c-data>
                                    </c-wiz>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
    </c-wiz>
    <c-wiz jsrenderer="lDZ2Fb" id="ZCHFDb" jsshadow="" jsdata="deferred-c536" data-p="%.@.0]" data-node-index="0;0"
        jsmodel="hc6Ubd" c-wiz="">
        <footer class="yhtbu" jscontroller="rpbmN" jsaction="tGMTLb:T1PkR">

            <div class="Hc0nne">
                <section><span class="GMGZAc">Google Play</span><a target="_blank" class="AU8vyc">
                        <p class="CmHxkb">Play Pass</p>
                    </a><a h target="_blank" class="AU8vyc">
                        <p class="CmHxkb">Play Points</p>
                    </a><a target="_blank" class="AU8vyc">
                        <p class="CmHxkb">Tarjetas regalo</p>
                    </a><a target="_blank" class="AU8vyc">
                        <p class="CmHxkb">Canjear</p>
                    </a><a target="_blank" class="AU8vyc">
                        <p class="CmHxkb">Política de reembolsos</p>
                    </a></section>
                <section>
                    <span class="GMGZAc">Niños y familia</span><a target="_blank" class="AU8vyc">
                        <p class="CmHxkb">Guía para padres</p>
                    </a><a target="_blank" j class="AU8vyc">
                        <p class="CmHxkb">Compartir en familia</p>
                    </a>
                </section>
            </div>
            <div class="sv9Noe">
                <div class="KvNvKe"><a target="_blank" class="AU8vyc">
                        <p class="QOTGFf">Términos del Servicio</p>
                    </a></div>
                <div class="KvNvKe"><a target="_blank" class="AU8vyc">
                        <p class="QOTGFf">Privacidad</p>
                    </a></div>
                <div class="KvNvKe"><a target="_blank" class="AU8vyc">
                        <p class="QOTGFf">Información sobre Google Play</p>
                    </a></div>
                <div class="KvNvKe"><a target="_blank" class="AU8vyc">
                        <p class="QOTGFf">Desarrolladores</p>
                    </a></div>
                <div class="KvNvKe"><a target="_blank" class="AU8vyc">
                        <p class="QOTGFf">Google Store</p>
                    </a></div>
                <div class="KvNvKe">Todos los precios incluyen IVA</div>
                <div class="KvNvKe avtIH">
                    <div class="AJ34ce"><img src="img/brazil.png" class="GrpFfc" aria-hidden="true">
                        <div class="yVZQTb">Brasil (Español)</div>
                    </div>
                </div>
            </div>
        </footer>
        <c-data id="c536" jsdata=" swBvle;_;$693 XMKGyc;_;$694"></c-data>
    </c-wiz>


</body>

</html>



<?php
// Fechar a conexão
$conn->close();
?>