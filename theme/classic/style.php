        body{font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:14px;line-height:1em;color:#000;background-color:#f7f7f9;<?php if (getConfig('background')) { ?>background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-image:url("<?php echo getConfig('background'); ?>");<?php } ?>}
        a{color:#24292e;cursor:pointer;text-decoration:none}
        ion-icon{font-size:15px;vertical-align:bottom}
        .changelanguage{position:absolute;right:5px;}
        .title{text-align:center;margin-top:1rem;letter-spacing:2px;margin-bottom:2rem}
        .title a{color:#333;text-decoration:none}
        .list-wrapper{width:80%;margin:0 auto 30px;position:relative;box-shadow:0 0 32px 0 rgb(128,128,128);border-radius:15px;}
        .list-container{position:relative;overflow:hidden;border-radius:15px;}
        .list-header-container{position:relative}
        .list-header-container a.back-link{color:#000;display:inline-block;position:absolute;font-size:16px;margin:20px 10px;padding:10px 10px;vertical-align:middle;text-decoration:none}
        .list-container,.list-header-container,.list-wrapper,a.back-link:hover,body{color:#24292e}
        .table-header{margin:0;border:0 none;padding:30px 60px;text-align:left;font-weight:400;color:#000;background-color:rgba(245,245,245,0.5);word-break: break-all;word-wrap: break-word;}
        .list-body-container{position:relative;left:0;overflow-x:hidden;overflow-y:auto;box-sizing:border-box;background:rgba(245,245,245,0.5)}
        .more-disk{margin:0;border:0 none;padding:30px 30px;text-align:left;font-weight:400;color:#000;background-color:rgba(245,245,245,0.5);white-space:nowrap;overflow:auto;}
        .more-disk a{margin:0 10px;padding:5px;transition-duration: 0.4s;border-radius: 12px; background-color: white; color: black; border: 2px solid rgba(85,85,85,0.7); }
        .more-disk a:hover, .more-disk a[now]{ background-color: rgba(85,85,85,0.7); color: white; }
        .list-table{width:100%;padding:0 20px 20px 20px;border-spacing:0}
        .list-table tr{height:40px}
        .list-table tr[data-to]:hover{background:rgba(85,85,85,0.7);color:white;}
        .list-table tr[data-to]:hover a{color:white}
        .list-table tr:first-child{background:rgba(245,245,245,0)}
        .list-table td,.list-table th{padding:0 10px;text-align:left}
        .list-table .size,.list-table .updated_at{text-align:right}
        .updated_at{width:25%}
        .size{width:15%}
        .mask{position:absolute;left:0px;top:0px;width:100%;background-color:#000;filter:alpha(opacity=50);opacity:0.5;z-index:2;}
<?php if ($_SERVER['admin']) { ?>
        .operate{display:inline-table;margin:0;margin-right:5px;list-style:none}
        .operate ul{position:absolute;display:none;background:#fffaaa;border:0px #f7f7f7 solid;border-radius:5px;margin:-7px 0 0 0;padding:0 7px;color:#205D67;z-index:1;}
        .operate:hover ul{position:absolute;display:inline-table;}
        .operate ul li{padding:7px;list-style:none;display:block;}
        .list-table tr[data-to]:hover .operate ul li a{color:black}
<?php } ?>
        .operatediv{position:absolute;border:1px #CCCCCC;background-color:#FFFFCC;z-index:2;}
        .operatediv div{margin:16px}
        .operatediv_close{position:absolute;right:3px;top:3px;}
        .readme{padding:8px;background-color:rgba(245,245,245,0.5);}
        .markdown-body, .customfile{padding:20px;text-align:left}
        @media only screen and (max-width:480px){
            .title{margin-bottom:24px}
            .list-wrapper{width:95%; margin-bottom:24px;}
            .list-table {padding:8px}
            .list-table td, .list-table th{white-space:nowrap;overflow:auto;max-width:80px}
            .size, .updated_at{display:none}
        }
