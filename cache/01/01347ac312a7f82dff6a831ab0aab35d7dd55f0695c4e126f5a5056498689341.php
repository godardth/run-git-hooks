<?php

/* index.html */
class __TwigTemplate_457888d3c4c0e0717e27bcf0387574709c3820d0a68200b6cc52dc2712610508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Run Git Hooks</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"./bower_components/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"./bower_components/metisMenu/dist/metisMenu.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"./assets/css/sb-admin-2.css\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"./bower_components/morrisjs/morris.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"./bower_components/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">Run Git Hooks</a>
            </div>

            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 57
            echo "                        <li>
                            <a href=\"#\" class=\"run-script\" script=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["script"], "filename", array()), "html", null, true);
            echo "\"><i class=\"fa fa-file-code-o fa-fw\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["script"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </ul>
                </div>
            </div>
        </nav>

        <div id=\"page-wrapper\">
        \t
        \t<div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 id=\"page-title\" class=\"page-header\">Dashboard</h1>
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-terminal fa-fw\"></i> Console Output
                        </div>
                        <div class=\"panel-body\">
                            <p id=\"console-output\"></p>
                        </div>
                    </div>
                </div>   
                
        \t\t<div class=\"col-lg-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <i class=\"fa fa-cog fa-fw\"></i> Options
                        </div>
                        <div class=\"panel-body\">
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src=\"./bower_components/jquery/dist/jquery.min.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"./bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"./bower_components/metisMenu/dist/metisMenu.min.js\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"./assets/js/sb-admin-2.js\"></script>
    <script src=\"./assets/js/runscript.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 61,  83 => 58,  80 => 57,  76 => 56,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Run Git Hooks</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">*/
/* */
/*     <!-- MetisMenu CSS -->*/
/*     <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="./assets/css/sb-admin-2.css" rel="stylesheet">*/
/* */
/*     <!-- Morris Charts CSS -->*/
/*     <link href="./bower_components/morrisjs/morris.css" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/*     <div id="wrapper">*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">Run Git Hooks</a>*/
/*             </div>*/
/* */
/*             <div class="navbar-default sidebar" role="navigation">*/
/*                 <div class="sidebar-nav navbar-collapse">*/
/*                     <ul class="nav" id="side-menu">*/
/*                         {% for script in scripts %}*/
/*                         <li>*/
/*                             <a href="#" class="run-script" script="{{script.filename}}"><i class="fa fa-file-code-o fa-fw"></i> {{script.name}}</a>*/
/*                         </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         <div id="page-wrapper">*/
/*         	*/
/*         	<div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h1 id="page-title" class="page-header">Dashboard</h1>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="row">*/
/*                 <div class="col-lg-8">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <i class="fa fa-terminal fa-fw"></i> Console Output*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <p id="console-output"></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>   */
/*                 */
/*         		<div class="col-lg-4">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <i class="fa fa-cog fa-fw"></i> Options*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="./bower_components/jquery/dist/jquery.min.js"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Metis Menu Plugin JavaScript -->*/
/*     <script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>*/
/* */
/*     <!-- Custom Theme JavaScript -->*/
/*     <script src="./assets/js/sb-admin-2.js"></script>*/
/*     <script src="./assets/js/runscript.js"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
