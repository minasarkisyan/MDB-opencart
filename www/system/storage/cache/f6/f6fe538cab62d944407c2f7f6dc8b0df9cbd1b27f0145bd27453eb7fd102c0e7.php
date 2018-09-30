<?php

/* install/step_4.twig */
class __TwigTemplate_412a601d027176c90ede873c5351f721393f892a20117507d59b049da14b88d6 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">4<small>/4</small></h1>
        <h3>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "<br>
          <small>";
        // line 8
        echo (isset($context["text_step_4"]) ? $context["text_step_4"] : null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  ";
        // line 15
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 16
            echo "  <div class=\"alert alert-success alert-dismissible\">";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 18
        echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
        echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  <div class=\"visit\">
    <div class=\"row\">
      <div class=\"col-sm-5 col-sm-offset-1 text-center\">
        <p><i class=\"fa fa-shopping-cart fa-5x\"></i></p>
        <a href=\"../\" class=\"btn btn-secondary\">";
        // line 25
        echo (isset($context["text_catalog"]) ? $context["text_catalog"] : null);
        echo "</a></div>
      <div class=\"col-sm-5 text-center\">
        <p><i class=\"fa fa-cog fa-5x white\"></i></p>
        <a href=\"../admin/\" class=\"btn btn-secondary\">";
        // line 28
        echo (isset($context["text_admin"]) ? $context["text_admin"] : null);
        echo "</a></div>
    </div>
  </div>

  <div class=\"support text-center\">
    <div class=\"row\">
      <div class=\"col-sm-4\"><a href=\"http://opencart-russia.ru\" class=\"icon transition\"><i class=\"fa fa-cloud fa-4x\"></i></a>
        <h3>";
        // line 35
        echo (isset($context["text_facebook"]) ? $context["text_facebook"] : null);
        echo "</h3>
        <p>";
        // line 36
        echo (isset($context["text_facebook_description"]) ? $context["text_facebook_description"] : null);
        echo "</p>
        <a href=\"http://opencart-russia.ru\">";
        // line 37
        echo (isset($context["text_facebook_visit"]) ? $context["text_facebook_visit"] : null);
        echo "</a></div>
      <div class=\"col-sm-4\"><a href=\"http://forum.opencart-russia.ru\" class=\"icon transition\"><i class=\"fa fa-comments fa-4x\"></i></a>
        <h3>";
        // line 39
        echo (isset($context["text_forum"]) ? $context["text_forum"] : null);
        echo "</h3>
        <p>";
        // line 40
        echo (isset($context["text_forum_description"]) ? $context["text_forum_description"] : null);
        echo "</p>
        <a href=\"http://forum.opencart-russia.ru\">";
        // line 41
        echo (isset($context["text_forum_visit"]) ? $context["text_forum_visit"] : null);
        echo "</a></div>
      <div class=\"col-sm-4\"><a href=\"http://forum.opencart-russia.ru/forums/poisk-ispolnitelei/\" class=\"icon transition\"><i class=\"fa fa-user fa-4x\"></i></a>
        <h3>";
        // line 43
        echo (isset($context["text_commercial"]) ? $context["text_commercial"] : null);
        echo "</h3>
        <p>";
        // line 44
        echo (isset($context["text_commercial_description"]) ? $context["text_commercial_description"] : null);
        echo "</p>
        <a href=\"http://forum.opencart-russia.ru/forums/poisk-ispolnitelei/\" target=\"_BLANK\">";
        // line 45
        echo (isset($context["text_commercial_visit"]) ? $context["text_commercial_visit"] : null);
        echo "</a></div>
    </div>
  </div>
</div>
";
        // line 49
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "install/step_4.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  111 => 45,  107 => 44,  103 => 43,  98 => 41,  94 => 40,  90 => 39,  85 => 37,  81 => 36,  77 => 35,  67 => 28,  61 => 25,  50 => 18,  44 => 16,  42 => 15,  32 => 8,  28 => 7,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/*   <header>*/
/*     <div class="row">*/
/*       <div class="col-sm-6">*/
/*         <h1 class="pull-left">4<small>/4</small></h1>*/
/*         <h3>{{ heading_title }}<br>*/
/*           <small>{{ text_step_4 }}</small></h3>*/
/*       </div>*/
/*       <div class="col-sm-6">*/
/*         <div id="logo" class="pull-right hidden-xs"><img src="view/image/logo.png" alt="OpenCart" title="OpenCart" /></div>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible">{{ success }}</div>*/
/*   {% endif %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   <div class="visit">*/
/*     <div class="row">*/
/*       <div class="col-sm-5 col-sm-offset-1 text-center">*/
/*         <p><i class="fa fa-shopping-cart fa-5x"></i></p>*/
/*         <a href="../" class="btn btn-secondary">{{ text_catalog }}</a></div>*/
/*       <div class="col-sm-5 text-center">*/
/*         <p><i class="fa fa-cog fa-5x white"></i></p>*/
/*         <a href="../admin/" class="btn btn-secondary">{{ text_admin }}</a></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="support text-center">*/
/*     <div class="row">*/
/*       <div class="col-sm-4"><a href="http://opencart-russia.ru" class="icon transition"><i class="fa fa-cloud fa-4x"></i></a>*/
/*         <h3>{{ text_facebook }}</h3>*/
/*         <p>{{ text_facebook_description }}</p>*/
/*         <a href="http://opencart-russia.ru">{{ text_facebook_visit }}</a></div>*/
/*       <div class="col-sm-4"><a href="http://forum.opencart-russia.ru" class="icon transition"><i class="fa fa-comments fa-4x"></i></a>*/
/*         <h3>{{ text_forum }}</h3>*/
/*         <p>{{ text_forum_description }}</p>*/
/*         <a href="http://forum.opencart-russia.ru">{{ text_forum_visit }}</a></div>*/
/*       <div class="col-sm-4"><a href="http://forum.opencart-russia.ru/forums/poisk-ispolnitelei/" class="icon transition"><i class="fa fa-user fa-4x"></i></a>*/
/*         <h3>{{ text_commercial }}</h3>*/
/*         <p>{{ text_commercial_description }}</p>*/
/*         <a href="http://forum.opencart-russia.ru/forums/poisk-ispolnitelei/" target="_BLANK">{{ text_commercial_visit }}</a></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
