<?php

/* FinanceiroBundle:Os:new.html.twig */
class __TwigTemplate_63817dd6707209291f1af6b4574815bb0abded997c71cecd44131109865106b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Creando Ordem de Serviço</h1>

<form action=\"/os/create\" method=\"POST\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 8
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataPrometida", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataPacote", array()), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dataEntrega", array()), 'row');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorCobrado", array()), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "obs", array()), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'row');
        echo "

    <h3>OsHasÍtens</h3>
    <ul class=\"tags\" data-prototype=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "osHasItens", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
        ";
        // line 19
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "osHasItens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["osHasItem"]) {
            // line 20
            echo "            <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["osHasItem"], "qtd", array()), 'row');
            echo "</li>
            <li>";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["osHasItem"], "item", array()), 'row');
            echo "</li>
            <li>";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["osHasItem"], "servico", array()), 'row');
            echo "</li>
            <li>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["osHasItem"], "un", array()), 'row');
            echo "</li>
            <li>";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["osHasItem"], "valor", array()), 'row');
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['osHasItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>

    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
    
    
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("os");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>

                
<script>
// Get the ul that holds the collection of tags
var collectionHolder = \$('ul.tags');

// setup an \"add a tag\" link
var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Adicionar tag</a>');
var \$newLinkLi = \$('<li></li>').append(\$addTagLink);

jQuery(document).ready(function() {
    // add a delete link to all of the existing tag form li elements
    collectionHolder.find('li').each(function() {
        addTagFormDeleteLink(\$(this));
    });

    // add the \"add a tag\" anchor and li to the tags ul
    collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    collectionHolder.data('index', collectionHolder.find(':input').length);

    \$addTagLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addTagForm(collectionHolder, \$newLinkLi);
    });
    
});        
        
    </script>
    
    
<script>    
    function addTagForm(collectionHolder, \$newLinkLi) {
        // Get the data-prototype explained earlier
        var prototype = collectionHolder.data('prototype');

        // get the new index
        var index = collectionHolder.data('index');

        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on the current collection's length.
        var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);

        // increase the index with one for the next item
        collectionHolder.data('index', index + 1);

        // Display the form in the page in an li, before the \"Add a tag\" link li
        var \$newFormLi = \$('<li></li>').append(newForm);
        \$newLinkLi.before(\$newFormLi);

        // add a delete link to the new form
        addTagFormDeleteLink(\$newFormLi);        
    }    
    </script>
    
    <script>    
function addTagFormDeleteLink(\$tagFormLi) {
    var \$removeFormA = \$('<a href=\"#\">delete this tag</a>');
    \$tagFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$tagFormLi.remove();
    });
}    
    </script>
        
";
    }

    public function getTemplateName()
    {
        return "FinanceiroBundle:Os:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  116 => 28,  112 => 26,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  87 => 20,  82 => 19,  78 => 17,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  47 => 8,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
