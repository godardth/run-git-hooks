<?php

/* test.html */
class __TwigTemplate_16cdc392feba6b380cf05d92dde528eecbce66423f748804f77797b60ab8436a extends Twig_Template
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
        echo "<html>
<body>
test.html file content<br>
Hello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <html>*/
/* <body>*/
/* test.html file content<br>*/
/* Hello {{name}}*/
/* </body>*/
/* </html>*/
/* */
