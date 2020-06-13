<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="Multiclass-Classification">Multiclass Classification<a class="anchor-link" href="#Multiclass-Classification">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>This example will show you how to use the different methods of a Multiclass Classifier. We will use the Iris dataset.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[31]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.datasets</span> <span class="k">import</span> <span class="n">load_iris</span>
<span class="n">iris</span> <span class="o">=</span> <span class="n">load_iris</span><span class="p">()</span>
<span class="nb">print</span><span class="p">(</span><span class="n">iris</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalWidthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Species</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalWidthCm</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">1.10</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.30</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.10</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">1.40</td><td style="border: 1px solid white;">2.90</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.20</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">2.30</td><td style="border: 1px solid white;">4.50</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.30</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;object&gt;  Name: iris, Number of rows: 150, Number of columns: 5
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Let's create a Random Forest to predict the Flower Species.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[35]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.ensemble</span> <span class="k">import</span> <span class="n">RandomForestClassifier</span>
<span class="n">model</span> <span class="o">=</span> <span class="n">RandomForestClassifier</span><span class="p">(</span><span class="s2">&quot;public.RF_iris&quot;</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="s2">&quot;public.iris&quot;</span><span class="p">,</span> 
          <span class="p">[</span><span class="s2">&quot;PetalLengthCm&quot;</span><span class="p">,</span> <span class="s2">&quot;SepalWidthCm&quot;</span><span class="p">,</span> <span class="s2">&quot;SepalLengthCm&quot;</span><span class="p">,</span> <span class="s2">&quot;PetalWidthCm&quot;</span><span class="p">],</span> 
          <span class="s2">&quot;Species&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[35]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>

===========
call_string
===========
SELECT rf_classifier(&#39;public.RF_iris&#39;, &#39;public.iris&#39;, &#39;&#34;species&#34;&#39;, &#39;&#34;PetalLengthCm&#34;, &#34;SepalWidthCm&#34;, &#34;SepalLengthCm&#34;, &#34;PetalWidthCm&#34;&#39; USING PARAMETERS exclude_columns=&#39;&#39;, ntree=10, mtry=2, sampling_size=0.632, max_depth=5, max_breadth=1000000000, min_leaf_size=1, min_info_gain=0, nbins=32);

=======
details
=======
  predictor  |      type      
-------------+----------------
petallengthcm|float or numeric
sepalwidthcm |float or numeric
sepallengthcm|float or numeric
petalwidthcm |float or numeric


===============
Additional Info
===============
       Name       |Value
------------------+-----
    tree_count    | 10  
rejected_row_count|  0  
accepted_row_count| 150 </pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>By fitting the model, new model's attributes will be created. These attributes will be used to simplify the methods usage.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[36]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">X</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[36]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[&#39;&#34;PetalLengthCm&#34;&#39;, &#39;&#34;SepalWidthCm&#34;&#39;, &#39;&#34;SepalLengthCm&#34;&#39;, &#39;&#34;PetalWidthCm&#34;&#39;]</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[37]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">y</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[37]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&#39;&#34;Species&#34;&#39;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[38]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">input_relation</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[38]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&#39;public.iris&#39;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[39]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">test_relation</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[39]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&#39;public.iris&#39;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>In our case, we did not write the test relation when fitting the model. The model will then consider the train relation as test. These attributes will be used when invoking the different model abstractions. For example, let's compute the accuracy of the model.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[40]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">score</span><span class="p">(</span><span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;accuracy&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[40]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>1.0</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>The 'score' method is using the attribute 'y' and the model prediction in the 'test_relation' to compute the accuracy. It is then possible to change them anytime to deploy the models on different columns. The model could also have other useful attributes. In the case of Random Forest, the 'classes' attribute is the list of the response categories.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[41]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">classes</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[41]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[&#39;Iris-setosa&#39;, &#39;Iris-versicolor&#39;, &#39;Iris-virginica&#39;]</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Many abstraction can help you drawing model evaluation curves like PRC, ROC or Lift Chart. But as it is a multiclass classification, one of the class must be considered as positive. The parameter pos_label will represent this class. Let's consider the 'Iris-setosa' as the positive class.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[44]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">roc_curve</span><span class="p">(</span><span class="n">pos_label</span> <span class="o">=</span> <span class="s1">&#39;Iris-setosa&#39;</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">prc_curve</span><span class="p">(</span><span class="n">pos_label</span> <span class="o">=</span> <span class="s1">&#39;Iris-setosa&#39;</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">lift_chart</span><span class="p">(</span><span class="n">pos_label</span> <span class="o">=</span> <span class="s1">&#39;Iris-setosa&#39;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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/iEgASgJ/Avo6O6puZVHRPIXlTQRERGRGKTDnSIiIiIxKGolLeuWJxvNbOFBnjczG25mP5rZAjNrFK0sIiIiIvEmmnvSxgItcnj+CqB21k8H4JkoZhERERGJK1Erae4+A9iawybXAuM802zgWDOLxdlGIiIiInkuyHPSTgB+zra8JmudiIiISIEXFzdYN7MOZB4SpVDRkmeXLlsh4ERypBywoEPIEdF3F9/0/cUvfXfxyPG03eDp7NixY7O7Vz6SdwmypK0lc8bRPtWz1v2Juz8HPAdQrlJ1/2X10uink6iYPXs2TZo0CTqGHAF9d/FN31/80ncXX7777juSk5NJS0uja9euXHrppasO/aoDC7KkvQN0MbMJQGPgN3c/rJsii4iIiMQCd+df//oXr776KieccAKJiYlUr179qN4zaiXNzMYDzYFKZraGzKncRQHc/VngfeBK4EdgN3B3tLKIiIiIRMuuXbtISUlhzpw5XHjhhXTp0oWSJUse9ftGraS5+y2HeN6BztH6fBEREZFoW7lyJeFwmA0bNtC+fXuuvvpqMu9Md/Ti4sIBERERkVjz2WefMXLkSEqVKkW/fv2oV69err6/SpqIiIjIYUhLS2PMmDG899571KtXj169elGhQu5PnlBJExEREYnQli1bCIfDLFmyhJYtW9K2bVuKFIlOnVJJExEREYnA999/z6BBg0hNTaVXr15ceOGFUf08lTQRERGRHLg7kydPZty4cVSrVo1+/fpRo0aNqH+uSpqIiIjIQezevZvhw4cza9YsLrjgAh544AFKlSqVJ5+tkiYiIiJyAKtXryYUCvHLL79w9913c+211+baeI1IqKSJiIiI7Ofzzz9nxIgRFC9enKeeeoozzjgjzzOopImIiIhk2bt3L2PHjmXKlCmcfvrp9O7dm4oVKwaSRSVNREREBNi6dSuDBg1i8eLFXH311dx1110ULVo0sDwqaSIiIlLgLVq0iEGDBrF792569OhBs2bNgo6kkiYiIiIFl7vzzjvvMHbsWKpUqULfvn056aSTgo4FqKSJiIhIAbVnzx6efvppZs6cSZMmTejatSvHHHNM0LH+n0qaiIiIFDhr1qxh4MCBrFu3jrZt23L99dfn6XiNSKikiYiISIHy5ZdfkpKSQvHixenbty8NGjQIOtIBqaSJiIhIgZCens64ceOYPHkyp512GgkJCVSqVCnoWAelkiYiIiL53rZt2xg0aBALFy7kiiuu4J577gl0vEYkVNJEREQkX/vhhx9ISkpi586dPPjgg/z9738POlJEVNJEREQkX3J33nvvPV566SUqV67MoEGDqFmzZtCxIqaSJiIiIvnO77//zsiRI5kxYwbnnnsuDz74IKVLlw461mFRSRMREZF8Ze3atYTDYX7++Wduv/12brjhBgoVKhR0rMOmkiYiIiL5xuzZs0lJSaFw4cI88cQTNGzYMOhIR0wlTUREROJeeno6r7zyCpMmTeLUU08lMTGRypUrBx3rqKikiYiISFzbtm0bgwcPZsGCBVx++eXce++9MT9eIxIqaSIiIhK3lixZQjgcZseOHXTt2pWLL7446Ei5RiVNRERE4o678+GHH/LCCy9QsWJFwuEwtWrVCjpWrlJJExERkbiSmprKqFGjmD59OmeffTYPPfRQ3I3XiIRKmoiIiMSNX375hVAoxKpVq7jlllto3bp1XI7XiIRKmoiIiMSFr776imHDhmFmPP744zRq1CjoSFGlkiYiIiIxLT09nfHjxzNx4kROOeUUEhISOP7444OOFXUqaSIiIhKztm/fzuDBg5k/fz6XXHIJ9913H8WKFQs6Vp5QSRMREZGYtGzZMsLhMNu2baNz585cdtllQUfKUyppIiIiElPcnY8++ojnnnuOChUqEAqFOPXUU4OOledU0kRERCRmpKamMnr0aD755BP+8pe/8NBDD1G2bNmgYwVCJU1ERERiwvr16wmHw6xYsYKbb76Zm2++mcKFCwcdKzAqaSIiIhK4efPmMXToUNydxx57jHPOOSfoSIFTSRMREZHApKen8/rrr/PGG29Qs2ZNEhMTqVKlStCxYoJKmoiIiARix44dDBkyhG+++YaLLrqIjh07Urx48aBjxQyVNBEREclzy5cvJxQKsXXrVu6//34uv/xyzCzoWDFFJU1ERETy1LRp03j22WcpV64cAwcO5LTTTgs6UkxSSRMREZE88ccff/Dcc8/x8ccfc9ZZZ9GzZ88CO14jEippIiIiEnUbN24kFAqxfPlybrzxRm699dYCPV4jEippIiIiElXffPMNQ4YMIT09nUceeYTGjRsHHSkuqKSJiIhIVGRkZDBx4kTGjx9PjRo1SExMpFq1akHHihsqaSIiIpLrdu7cydChQ5k3bx7Nmzfn/vvvp0SJEkHHiisqaSIiIpKrVqxYQTgcZvPmzXTo0IErr7xS4zWOgEqaiIiI5JpPP/2UZ555hjJlytC/f39OP/30oCPFLZU0EREROWppaWm88MILfPjhh5x55pn07NmTY489NuhYcU0lTURERI7Kpk2bCIfDLFu2jFatWnH77bdrvEYuUEkTERGRIzZ//nwGDx5MWloaiYmJnH/++UFHyjdU0kREROSwZWRkMGnSJF599VWqV69OQkIC1atXDzpWvqKSJiIiIodl586dpKSk8NVXX/HXv/6Vzp07U7JkyaBj5TsqaSIiIhKxlStXEgqF2LhxI+3bt+fqq6/WeI0oUUkTERGRiEyfPp2RI0dyzDHH0L9/f+rWrRt0pHxNJU1ERERylJaWxpgxY3jvvfeoX78+vXr1onz58kHHyvdU0kREROSgNm/eTFJSEkuWLOG6667jjjvuoEgR1Ye8oP/KIiIickALFiwgOTmZ1NRUevfuTdOmTYOOVKCopImIiMj/cHfeeustXn75ZapVq0b//v058cQTg45V4KikiYiIyP/bvXs3w4cPZ9asWTRt2pQuXbpQqlSpoGMVSCppIiIiAsDq1asZOHAg69evp127drRs2VLjNQKkkiYiIiLMmDGDESNGULJkSfr160f9+vWDjlTgqaSJiIgUYHv37mXs2LFMmTKFunXr0qtXLypWrBh0LEElTUREpMDaunUrSUlJ/PDDD1xzzTXcddddGq8RQ/RNiIiIFECLFi0iKSmJPXv20KNHD5o1axZ0JNmPSpqIiEgB4u688847jB07lipVqvDUU09Ro0aNoGPJAaikiYiIFBC7d+9mxIgRzJw5kyZNmtCtWzeN14hhKmkiIiIFwM8//0woFGLdunW0bduW66+/XuM1YpxKmoiISD43c+ZMhg8fTvHixenbty8NGjQIOpJEQCVNREQkn0pPT2fcuHFMnjyZOnXq0Lt3bypVqhR0LImQSpqIiEg+9Ouvv5KcnMzChQu58soradeuHUWLFg06lhwGlTQREZF85ocffiAcDrNr1y66d+9O8+bNg44kR0AlTUREJJ9wd959913GjBnDcccdR58+fahZs2bQseQIqaSJiIjkA3v27GHUqFHMmDGD8847j27dulG6dOmgY8lRUEkTERGJc2vXriUUCrFmzRruuOMOWrVqRaFChYKOJUdJJU1ERCSOzZo1i5SUFIoWLcoTTzxBw4YNg44kuUQlTUREJA6lp6fzyiuvMGnSJGrXrk1CQgKVK1cOOpbkIpU0ERGROLNt2zaSk5P5/vvvadGiBe3bt9d4jXxIJU1ERCSOLFmyhHA4zI4dO+jWrRsXXXRR0JEkSqJ6VqGZtTCzJWb2o5klHuD5Gmb2bzP71swWmNmV0cwjIiISr9yd9957j0ceeYQiRYoQDodV0PK5qO1JM7PCwEjgUmANMNfM3nH3xdk2+wfwhrs/Y2b1gPeBmtHKJCIiEo9SU1MZNWoU06dP55xzzqF79+4ar1EARPNw53nAj+6+AsDMJgDXAtlLmgNlsx6XA9ZFMY+IiEjc2bp1K7169WL16tXcdttt3HjjjRqvUUBEs6SdAPycbXkN0Hi/bfoAH5nZA8AxwCVRzCMiIhJX5syZw9ixYylWrBiPP/44jRo1CjqS5KGgLxy4BRjr7oPN7HzgZTM7w90zsm9kZh2ADgClyh3P7NmzA4gquWHXrl36/uKUvrv4pu8vvmRkZPD555/z5Zdfctxxx3HDDTfwxx9/6DssYKJZ0tYCJ2Zbrp61Lrt7gBYA7j7LzEoAlYCN2Tdy9+eA5wDKVaruTZo0iVZmibLZs2ej7y8+6buLb/r+4sf27dtJTk7mu+++49JLL6Vhw4ZceOGFQceSAETzoPZcoLaZnWxmxYA2wDv7bbMauBjAzOoCJYBNUcwkIiISs5YuXUr37t1ZvHgxXbp0oUuXLhQpEvRBLwlK1L55d99rZl2AqUBh4CV3X2RmTwLz3P0doAfwvJl1J/Migrvc3aOVSUREJBa5O1OnTuX555+nQoUKhEIhTj311KBjScCiWs/d/X0yx2pkX/d4tseLgabRzCAiIhLLUlNTefbZZ/n0009p1KgR3bt3p2zZsod+oeR72ocqIiISkPXr1xMKhfjpp59o06YNrVu3pnDhwkHHkhihkiYiIhKAefPmMWTIEAAee+wxzjnnnIATSaxRSRMREclD6enpvP7667z++uucfPLJJCYmUqVKlaBjSQxSSRMREckj27dvZ8iQIXz77bdcdNFFdOzYkeLFiwcdS2KUSpqIiEge+PHHHwmHw2zdupVOnTpx2WWXYWZBx5IYppImIiISZR9//DGjR4+mXLlyhEIhateuHXQkiQMqaSIiIlHyxx9/MHr0aKZNm0bDhg3p0aOHxmtIxFTSREREomDDhg2Ew2GWL1/OTTfdxC233KLxGnJYVNJERERy2TfffMOQIUPIyMjg0Ucf5bzzzgs6ksQhlTQREZFckpGRwcSJExk/fjwnnXQSiYmJVK1aNehYEqdU0kRERHLBzp07GTp0KPPmzaN58+Z06tRJ4zXkqKikiYiIHKUVK1YQCoXYsmUL9913H1dccYXGa8hRU0kTERE5Cp988gnPPvssZcqUYcCAAdSpUyfoSJJPqKSJiIgcgbS0NJ5//nmmTp1KgwYN6NGjB8cee2zQsSQfUUkTERE5TJs2bSIcDrNs2TJuuOEGbrvtNo3XkFynkiYiInIY5s+fT3JyMunp6Tz88MM0adIk6EiST6mkiYiIRCAjI4N//etfvPbaa1SvXp3ExEROOOGEoGNJPqaSJiIicgg7d+5k2LBhzJ07l2bNmtG5c2dKlCgRdCzJ51TSREREcrBy5UoGDhzIpk2buPfee7nqqqs0XkPyhEqaiIjIQUyfPp2RI0dSunRp+vfvT926dYOOJAWISpqIiMh+0tLSePHFF/nggw8444wz6NmzJ+XLlw86lhQwKmkiIiLZbN68maSkJJYsWcJ1113HnXfeqfEaEgiVNBERkSwLFiwgOTmZ1NRUevfuTdOmTYOOJAWYSpqIiBR47s5bb73Fyy+/TLVq1RgwYADVq1cPOpYUcCppIiJSoO3atYvhw4cze/ZsmjZtSpcuXShVqlTQsURU0kREpOBatWoVoVCI9evX065dO1q2bKnxGhIzVNJERKRAmjFjBiNGjKBUqVL069eP+vXrBx1J5H+opImISIGSlpbG2LFjeffdd6lXrx69evWiQoUKQccS+ROVNBERKTC2bNnCoEGD+OGHH7jmmmu46667KFJE/1cosUn/yxQRkQJh4cKFDBo0iN9//52ePXvy17/+NehIIjlSSRMRkXzN3Xn77bf55z//SdWqVXnqqaeoUaNG0LFEDkklTURE8q3du3fz9NNP8+WXX3L++efTtWtXjdeQuKGSJiIi+dLPP/9MKBRi3bp1tG3bluuvv17jNSSuqKSJiEi+M3PmTIYPH07x4sXp27cvDRo0CDqSyGFTSRMRkXxj7969jBs3jrfffps6deqQkJBAxYoVg44lckRU0kREJF/49ddfSUpKYvHixVx11VXcfffdFC1aNOhYIkdMJU1EROLe4sWLSUpKYvfu3XTv3p3mzZsHHUnkqKmkiYhI3HJ33n33XcaMGcNxxx1Hnz59qFmzZtCxRHKFSpqIiMSlPXv2MGLECL744gsaN25Mt27dOOaYY4KOJZJrVNJERCTurFmzhlAoxNq1a7njjjto1aoVhQoVCjqWSK5SSRMRkbgya9YsUlJSKFq0KH369OGss84KOpJIVKikiYhIXEhPT+fll1/mrbfeonbt2iQkJFC5cuWgY4lEjUqaiIjEvG3btjFo0CAWLlzIFVdcwT333KPxGpLvqaSJiEhM+89//kM4HGbnzp1069aNiy66KOhIInlCJU1ERGKSu/P+++/z0ksvUalSJcLhMLVq1Qo6lkieUUkTEZGY8/vvvzNq1Cg+++wzzj33XB588EFKly4ddCyRPKWSJiIiMWXdunWEQiFWr17Nbbfdxo033qjxGlIgqaSJiEjMmDNnDsOGDaNw4cI8/vjjNGrUKOhIIoFRSRMRkcClp6fz2muv8eabb3LqqaeSkJDAcccdF3QskUCppImISKB+++03Bg8ezHfffcdll13GvffeS7FixYKOJRI4lTQREQnM0qVLCYfD/PbbbzzwwANccsklQUcSiRk5ljQzOxe4HfgrUBXYAywE3gNec/cdUU8oIiL5jrvz4Ycf8sILL1ChQgXC4TCnnHJK0LFEYspBS5qZvQdsBt4GBgMbgRLAacDfgffMLMnd382LoCIikj+kpqby7LPP8umnn9KoUSMeeughypQpE3QskZiT0560du6+Yb91vwNfZf2EzUxndYqISMR++eUXwuEwK1eupE2bNtx8880aryFyEActafsKmpndT+ahzd8OsM3GKGYTEZF8ZO7cuQwdOhQz47HHHuPss88OOpJITIvkwoGTgG/MbA7wkrtPi3ImERHJR9LT05kwYQJvvPEGtWrVIjExkeOPPz7oWCIx75Alzd0TzewR4Aqgo5k9A4wns7CtjHI+ERGJY9u3b2fw4MHMnz+fiy++mPvuu4/ixYsHHUskLkQ0gsPdM8xsJbASOJPMKz3fNrP33f3h6MUTEZF4tWzZMpKSkti6dSudO3fm0ksvxcyCjiUSNw5Z0sysM9AW2A68CDzq7qlmVgj4EVBJExGR//HRRx8xevRoypcvTygUonbt2kFHEok7kexJqwbc4u7Ls6/M2rvWMjqxREQkHqWmpvLcc88xbdo0GjZsSI8ePShbtmzQsUTiUiQl7YT9C5qZjXX3u9x9YZRyiYhInNmwYQPhcJjly5fTunVr2rRpQ+HChYOOJRK3IilpDbIvZB3mPDc6cUREJB59/fXXDBkyBHfn0Ucf5bzzzgs6kkjcy+mOAwlAIlDGzLbuWw04meemiYhIAZeRkcEbb7zBhAkTqFmzJgkJCVStWjXoWCL5Qk570pLIvB3UQDLLGgDunh7tUCIiEvt27NjB0KFD+frrr2nevDmdOnXSeA2RXJRTSTvV3ZeZ2ctA/X0r910+7e4LopxNRERi1IoVKxg4cCBbt26lY8eOtGjRQuM1RHJZTiUtEbgHGHmA5xxoFpVEIiIS06ZNm8bo0aMpU6YMAwYMoE6dOkFHEsmXcrp35z1Zv/417+KIiEis+uOPP3jhhReYOnUqDRo0oGfPnpQrVy7oWCL5ViTDbL8h8zZQb7j7quhHEhGRWLNx40bC4TA//vgjN9xwA7fddpvGa4hEWSQjOG4CbgbeMbPdwOtkFrZ1UU0mIiIx4dtvv2Xw4MGkp6fz8MMP06RJk6AjiRQIhQ61gbsvd/cB7n4W0A5oBKyOejIREQnUvvEaffv2pUKFCgwePFgFTSQPRXSDdTOrDrQmc49aEeDRaIYSEZFg7dy5k2HDhjF37lyaNWtG586dKVGiRNCxRAqUSM5J+xIoDUwEbnf3ZVFPJSIigfnpp58IhUJs2rSJDh06cOWVV2q8hkgAItmTdq+7L4p6EhERCdynn37KM888Q+nSpenfvz9169YNOpJIgZXTbaFucffxwMVmdvH+z7v78KgmExGRPJOWlsaLL77IBx98wBlnnEGvXr049thjg44lUqDltCetfNavlQ/wnEchi4iIBGDz5s2Ew2GWLl3K9ddfzx133KHxGiIxIKdhtqOyHr7n7rOzP2dmurxHRCQfWLBgAcnJyaSmppKQkMAFF1wQdCQRyRLJOWmjyBy7kd1I4OzcjyMiInnB3Zk0aRKvvPIK1apVY8CAAVSvXj3oWCKSTU7npJ0HnA9UNrOu2Z4qCxSNdjAREYmOXbt2kZKSwpw5c7jwwgvp0qULJUuWDDqWiOwnpz1pxwCVsrbJfl7aDjLvQnBIZtYCSAEKAy+4e+gA27QG+pB5ntt37n5rRMlFROSwrVq1ilAoxIYNG7jnnnu45pprNF5DJEbldE7av4F/m9kYd19xuG9sZoXJPCx6KbAGmGtm77j74mzb1AYeBpq6+69mdtxh/w5ERCQin332GSNHjqRUqVI89dRT1K9fP+hIIpKDnA53Dnb3HsBgM/vT1Zzu3uoQ730e8OO+gmdmE4BrgcXZtrkXGOnuv2a958bDzC8iIoeQlpbGRx99xNdff029evXo1asXFSpUCDqWiBxCToc7X8/6dcQRvvcJwM/ZltcAjffb5jQAM5tJ5iHRPu7+4RF+noiI7GfLli0kJSXxn//8h5YtW9K2bVuKFInojoAiErCcDnd+lfXrJ/vWmVk54ITshyxz4fNrAz0bQ9QAACAASURBVM2B6sAMMzvT3bdl38jMOgAdAEqVO57Zs2fv/z4SJ3bt2qXvL07pu4s/q1atYvLkyaSlpdGiRQvq16/PvHnzgo4lh0l/9gquSO7d+QlwPZl7ur4BtprZp+7e6xAvXQucmG25eta67NYAc9w9DfjJzJaSWdrmZt/I3Z8DngMoV6m6N2miMW3xavbs2ej7i0/67uKHuzN58mQmTJhA1apVSUxMZN26dfr+4pT+7BVchSLYpoK7bwdaAa+4+9nA5RG8bi5Q28xONrNiQBvgnf22mUzmXjTMrBKZhz8P+yIFERHJtHv3bsLhMGPHjqVx48YkJydTo0aNoGOJyBGI5MSEImZWmcyxG49H+sbuvtfMugBTydwL95K7LzKzJ4F57v5O1nOXmdliIB3o5e5bDvt3ISIirF69mlAoxC+//MLdd9/Ntddeq/EaInEskpLWH/gM+MLdvzKzWsBPkby5u78PvL/fusezPXbgoawfERE5Ql988QVPP/00xYsX58knn+TMM88MOpKIHKVDljR3nwBMyLa8gsxRGiIiErC9e/cyduxYpkyZwumnn07v3r2pWLFi0LFEJBdEcuFAJaAdUDP79u7eIXqxRETkULZu3cqgQYNYvHgxV111FXfffTdFi+qufSL5RSSHO98GZgNfkHnemIiIBGzRokUMGjSI3bt389BDD/G3v/0t6EgikssiKWnHZN15QEREAubuTJkyhTFjxlClShX69u3LSSedFHQsEYmCSEraB2Z2mbt/FPU0IiJyUHv27GHEiBF88cUXNG7cmG7dunHMMccEHUtEoiSSktYRSDCz3cAfgJF5YaZu/CYikkfWrFnDwIEDWbduHXfeeSetWrXSeA2RfC6SklYp6ilEROSgvvzyS1JSUihevDh9+vThrLPOCjqSiOSBSEZwpJtZG6CWuw8ws+rA8cDXUU8nIlKApaenM27cOCZPnsxpp51G7969qVy5ctCxRCSPRDKCYwRQFGgGDAB2A88C50Y3mohIwbVt2zYGDRrEwoULueKKK7jnnns0XkOkgInkcOcF7t7IzL4FcPetWffiFBGRKPjhhx9ISkpi586dPPjgg/z9738POpKIBCCSkpZmZoUABzCzikBGVFOJiBRA7s7777/Piy++SOXKlUlKSuLkk08OOpaIBCSSkjYS+BdQ2cz6Aq2BvlFNJSJSwPz++++MHDmSGTNmcO655/Lggw9SunTpoGOJSIAiuXBgnJl9DVySteomd18Y3VgiIgXHunXrCIVCrF69mttuu40bb7yRQoUKBR1LRAJ20JJmZiWANHdPd/dFZpYKXAHUAlTSRERywezZs0lJSaFw4cI88cQT/OUvfwk6kojEiJz+qTYVOAXAzE4BvgLqAQ+ZWf88yCYikm/tG68xcOBAqlWrxpAhQ1TQROR/5HS4s4K7L8163BaY4O6dzKw4MA94NOrpRETyoW3btjF48GAWLFjA5ZdfTvv27SlWTBfNi8j/yqmkebbHFwGDAdw91cx0daeIyBFYsmQJ4XCYHTt28MADD3DJJZcc+kUiUiDlVNIWmVkIWAucBnwEYGblyLx/p4iIRMjd+fDDD3nhhReoWLEi4XCYWrVqBR1LRGJYTiWtPdAdOB1o4e67stafAQyJdjARkfwiNTWVZ555hn//+9+cffbZdO/enTJlygQdS0Ri3EFLWlYp63eA9TOBmdEMJSKSX/zyyy+EQiFWrVrFLbfcQuvWrTVeQ0QiktMIjsnAaOBjd9+733MnkXkxwRp3fym6EUVE4tNXX33FsGHDMDMee+wxzj777KAjiUgcyelwZ2egBzDSzDYAm4ASZM5JWw2MdPd/RT+iiEh8SU9PZ/z48UycOJFTTjmFhIQEjj/++KBjiUicyelw51rgITLnop0KVAX2AEvcfUce5RMRiSvbt29n8ODBzJ8/n0suuYT77rtP4zVE5IhEcu9O3P1H4McoZxERiWvLli0jHA6zbds2OnfuzGWXXRZ0JBGJYxGVNBEROTh35+OPP2b06NGUL1+egQMHUrt27aBjiUicU0kTETkKqampjB49mk8++YSGDRvSo0cPypYtG3QsEckHIippZlYMqJF12FNERIANGzYQCoVYsWIFrVu3pk2bNhQuXDjoWCKSTxyypJnZVWQOry0GnGxmDYEn3P36aIcTEYlV8+bNY+jQobg7//jHPzj33HODjiQi+Uwke9KeBBoD/wZw9/lZV3uKiBQ4GRkZvP7667z++uvUrFmThIQEqlatGnQsEcmHIilpae6+zex/btfpB9tYRCS/2rFjB0OGDOGbb77hoosuomPHjhQvXjzoWCKST0VS0n4ws9ZAITM7GegKzI5uLBGR2LJ8+XJCoRBbt27l/vvv5/LLL2e/f7yKiOSqSG4g1wU4G8gAJgGpQLdohhIRiSXTpk0jISGB9PR0BgwYQIsWLVTQRCTqItmTdrm7JwAJ+1aYWSsyC5uISL71xx9/8Pzzz/PRRx/RoEEDevbsSbly5YKOJSIFRCQl7R/8uZA9eoB1IiL5xsaNGwmFQixfvpwbb7yRW2+9VeM1RCRPHbSkmdnlQAvgBDMbku2psmQe+hQRyZe+/fZbBg8eTHp6Oo888giNGzcOOpKIFEA57UnbCCwEfgcWZVu/A0iMZigRkSBkZGTw5ptv8tprr1GjRg0SExOpVq1a0LFEpIA6aElz92+Bb83sVXf/PQ8ziYjkuZ07dzJs2DDmzp3L3/72Nzp16kSJEiWCjiUiBVgk56SdYGb9gXrA//+N5e6nRS2ViEge+umnnwiFQmzevJkOHTpw5ZVX6upNEQlcJCVtLNAPSAauAO5Gw2xFJJ/49NNPeeaZZyhdujT9+/fn9NNPDzqSiAgQ2Zy0Uu4+FcDdl7v7P8gsayIicSstLY1nn32WlJQUTjvtNIYOHaqCJiIxJZI9aalmVghYbmYdgbVAmejGEhGJnk2bNhEOh1m2bBmtWrXi9ttv13gNEYk5kZS07sAxZN4Oqj9QDmgXzVAiItHy3XffkZycTFpaGgkJCVxwwQVBRxIROaBDljR3n5P1cAdwB4CZnRDNUCIiuS0jI4NJkybx6quvcsIJJ5CYmEj16tWDjiUiclA5ljQzOxc4AfjC3TebWX0ybw91EaC/3UQkLuzatYuUlBTmzJnDhRdeSJcuXShZsmTQsUREcpTTHQcGAjcA3wH/MLN3gU5AGOiYN/FERI7OypUrCYVCbNy4kfbt23P11VdrvIaIxIWc9qRdC5zl7nvMrALwM3Cmu6/Im2giIkdn+vTpjBw5kmOOOYZ+/fpRr169oCOJiEQsp5L2u7vvAXD3rWa2VAVNROJBWloaY8aM4b333qNevXr06tWLChUqBB1LROSw5FTSapnZpKzHBpycbRl3bxXVZCIiR2DLli2Ew2GWLFnCtddey5133kmRIpFcyC4iElty+pvrhv2WR0QziIjI0VqwYAHJycmkpqbSq1cvLrzwwqAjiYgcsZxusP5JXgYRETlS7s5bb73Fyy+/TLVq1ejfvz8nnnhi0LFERI6KjgGISFzbvXs3w4cPZ9asWVxwwQU88MADlCpVKuhYIiJHTSVNROLW6tWrGThwIOvXr6ddu3a0bNlS4zVEJN+IuKSZWXF3T41mGBGRSH3++eeMGDGCEiVK8NRTT3HGGWcEHUlEJFcdsqSZ2XnAi2Tes7OGmZ0FtHf3B6IdTkRkf3v37mXs2LFMmTKF008/nd69e1OxYsWgY4mI5LpI9qQNB64GJgO4+3dm9veophIROYCtW7cyaNAgFi9ezNVXX81dd91F0aJFg44lIhIVkZS0Qu6+ar/zPNKjlEdE5IAWLVpEUlISe/bsoUePHjRr1izoSCIiURVJSfs565Cnm1lh4AFgaXRjiYhkcnfeeecdxo4dS5UqVXjyySc56aSTgo4lIhJ1kZS0+8k85FkD2ABMy1onIhJVu3fvZsSIEcycOZMmTZrQrVs3jdcQkQIjkpK2193bRD2JiEg2a9asYeDAgaxbt462bdty/fXXa7yGiBQokZS0uWa2BHgdmOTuO6KcSUQKuJkzZzJ8+HCKFy9O3759adCgQdCRRETy3CFLmrufYmYXAG2AvmY2H5jg7hOink5ECpT09HTGjRvH5MmTqVOnDr1796ZSpUpBxxIRCUREw2zd/UvgSzPrAwwDXgVU0kQk1/z6668kJyezcOFCrrzyStq1a6fxGiJSoEUyzLY0cC2Ze9LqAm8DF0Q5l4gUID/88APhcJhdu3bx4IMP8ve/axSjiEgke9IWAlOAJHf/PMp5RKQAcXfeffddxowZQ+XKlenTpw81a9YMOpaISEyIpKTVcveMqCcRkQLl999/Z+TIkcyYMYNzzz2XBx98kNKlSwcdS0QkZhy0pJnZYHfvAfzLzHz/5929VVSTiUi+tXbtWkKhEGvWrOH222/nhhtuoFChQkHHEhGJKTntSXs969cReRFERAqGWbNmkZKSQpEiRXjiiSdo2LBh0JFERGLSQUuau3+V9bCuu/9PUTOzLsAn0QwmIvlLeno6r7zyCpMmTaJ27dokJCRQuXLloGOJiMSsSM5Ja8ef96bdc4B1IiIHtG3bNpKTk/n++++5/PLLuffeezVeQ0TkEHI6J+1mMsdunGxmk7I9VQbYFu1gIpI/LFmyhHA4zI4dO+jatSsXX3xx0JFEROJCTnvSvgK2ANWBkdnW7wC+jWYoEYl/7s4HH3zAiy++SMWKFQmHw9SqVSvoWCIicSOnc9J+An4CpuVdHBHJD1JTUxk1ahTTp0/n7LPP5qGHHtJ4DRGRw5TT4c7P3P1vZvYrkH0EhwHu7hWink5E4s4vv/xCKBRi1apV3Hrrrdx0000aryEicgRyOty5774suruxiERkzpw5pKSkUKhQIR5//HEaNWoUdCQRkbiV0+HOfXcZOBFY5+5/mNmFQAPgFWB7HuQTkTiQnp7O+PHjmThxIqeccgoJCQkcf/zxQccSEYlrkYzgmAyca2anAGOAd4HXgKujGUxE4sP27dsZPHgw8+fP55JLLuG+++6jWLFiQccSEYl7kZS0DHdPM7NWwNPuPtzMdHWniLB06VLC4TC//fYbnTt35rLLLgs6kohIvhFJSdtrZjcBdwDXZa3TFEqRAszdmTp1Ks8//zwVKlQgFApx6qmnBh1LRCRfieSSq3ZkXkSQ5O4rzOxkYHwkb25mLcxsiZn9aGaJOWx3g5m5mZ0TWWwRCUpqairDhw/nmWee4cwzz2Tw4MEqaCIiUXDIPWnuvtDMugKnmtnpwI/u3v9QrzOzwmQOwb0UWAPMNbN33H3xftuVAboBc47kNyAieWf9+vWEQiF++uknbr75Zm6++WYKFy4cdCwRkXzpkCXNzP4KvAysJXNGWhUzu8PdZx7ipeeRWehWZL3PBOBaYPF+2z0FhIFeh5ldRPLQjz/+yPDhwwF47LHHOOcc7fgWEYmmSA53DgWudPem7n4BcBWQEsHrTgB+zra8Jmvd/zOzRsCJ7v5ehHlFJI+lp6fz2muvMXHiRI477jiGDBmigiYikgciuXCgWPZDlO7+g5kd9fX1ZlYIGALcFcG2HYAOAKXKHc/s2bOP9uMlILt27dL3F0d2797NlClTWLFiBXXr1uWqq65i5cqVrFy5Muhocpj0Zy9+6bsruCIpad+Y2bNkDrAFuI3IbrC+lsxBuPtUz1q3TxngDGC6mQFUAd4xs5buPi/7G7n7c8BzAOUqVfcmTZpE8PESi2bPno2+v/jw448/Eg6H2bp1K/fffz/lypXj/PPPDzqWHCH92Ytf+u4KrkgOd3YEVgC9s35WAPdF8Lq5QG0zOzlrz1sb4J19T7r7b+5eyd1runtNYDbwp4ImInnv448/JjExkYyMDEKhEC1atCDrH1MiIpJHctyTZmZnAqcAb7l70uG8sbvvNbMuwFSgMPCSuy8ysyeBee7+Ts7vICJ57Y8//uC5557j448/5qyzzqJnz56ULVs26FgiIgXSQUuamT0C3AN8Q+ZtoZ5095cO583d/X3g/f3WPX6QbZsfznuLSO7asGED4XCY5cuXc+ONN3LrrbdqvIaISIBy2pN2G9DA3XeZWWUyy9ZhlTQRiQ/ffPMNQ4YMIT09nUceeYTGjRsHHUlEpMDLqaSluvsuAHfflHU1pojkIxkZGUycOJHx48dTo0YNHn74YapWrRp0LBERIeeSVsvMJmU9NuCUbMu4e6uoJhORqNq5cydDhw5l3rx5NG/enE6dOlG8ePGgY4mISJacStoN+y2PiGYQEck7K1asIBwOs3nzZjp06MCVV16pqzdFRGLMQUuau3+Sl0FEJG98+umnPPPMM5QpU4YBAwZQp06doCOJiMgBRDLMVkTygbS0NJ5//nmmTp3KmWeeSc+ePTn22GODjiUiIgehkiZSAGzatIlwOMyyZcto1aoVt99+u8ZriIjEuIhLmpkVd/fUaIYRkdw3f/58kpOT2bt3L4mJibq1k4hInDjkWA0zO8/MvgeWZS2fZWZPRz2ZiByVfeM1+vbtS/ny5Rk8eLAKmohIHIlkT9pw4GpgMoC7f2dmf49qKhE5Kjt37iQlJYWvvvqKZs2a0alTJ0qWLBl0LBEROQyRlLRC7r5qv8vz06OUR0SO0sqVKxk4cCCbNm2iffv2XH311RqvISIShyIpaT+b2XmAm1lh4AFgaXRjiciRmD59OiNHjuSYY46hf//+1K1bN+hIIiJyhCIpafeTecizBrABmJa1TkRiRFpaGi+99BLvv/8+9evXp1evXpQvXz7oWCIichQOWdLcfSPQJg+yiMgR2Lx5M0lJSSxZsoTrrruOO+64gyJFNF1HRCTeHfJvcjN7HvD917t7h6gkEpGILViwgOTkZFJTU+nduzdNmzYNOpKIiOSSSP65PS3b4xLA9cDP0YkjIpFwd9566y1efvllqlWrRv/+/TnxxBODjiUiIrkoksOdr2dfNrOXgS+ilkhEcrR7925SUlKYPXs2TZs2pUuXLpQqVSroWCIiksuO5MSVk4HjczuIiBza6tWrGThwIOvXr6ddu3a0bNlS4zVERPKpSM5J+5X/npNWCNgKJEYzlIj82YwZMxgxYgQlS5akX79+1K9fP+hIIiISRTmWNMv8J/pZwNqsVRnu/qeLCEQkevbu3cvYsWOZMmUKdevWpVevXlSsWDHoWCIiEmU5ljR3dzN7393PyKtAIvJfW7ZsYdCgQfzwww9cc8013HXXXRqvISJSQETyt/18M/uLu38b9TQi8v8WLVpEUlISe/bsoUePHjRr1izoSCIikocOWtLMrIi77wX+Asw1s+XALsDI3MnWKI8yihQo7s7bb7/NP//5T6pUqcJTTz1FjRo1go4lIiJ5LKc9aV8BjYCWeZRFpMDbvXs3Tz/9NF9++SVNmjShW7duGq8hIlJA5VTSDMDdl+dRFpEC7eeffyYUCrFu3Tratm3L9ddfr/EaIiIFWE4lrbKZPXSwJ919SBTyiBRIM2fOZPjw4RQvXpy+ffvSoEGDoCOJiEjAcipphYHSZO1RE5Hct3fvXsaNG8fbb79NnTp16N27N5UqVQo6loiIxICcStov7v5kniURKWB+/fVXBg0axKJFi7jqqqu4++67KVq0aNCxREQkRhzynDQRyX2LFy8mKSmJXbt20b17d5o3bx50JBERiTE5lbSL8yyFSAHh7rz77ruMGTOG4447jj59+lCzZs2gY4mISAw6aElz9615GUQkv9uzZw8jR47k888/p3HjxnTt2pXSpUsHHUtERGKU7i8jkgfWrFlDKBRi7dq13HHHHbRq1YpChQoFHUtERGKYSppIlM2aNYuUlBSKFi3KE088QcOGDYOOJCIicUAlTSRK0tPTeeWVV5g0aRK1a9cmISGBypUrBx1LRETihEqaSBRs27aN5ORkvv/+e1q0aEH79u01XkNERA6LSppILvvPf/5DUlISO3bsoFu3blx00UVBRxIRkTikkiaSS9yd999/n5deeolKlSoRDoepVatW0LFERCROqaSJ5ILff/+dUaNG8dlnn3HOOefQvXt3jdcQEZGjopImcpTWrVtHKBRi9erV3Hbbbdx4440aryEiIkdNJU3kKMyZM4dhw4ZRuHBhHn/8cRo1ahR0JBERySdU0kSOQHp6Oq+99hpvvvkmp5xyCgkJCRx//PFBxxIRkXxEJU3kMP32228MHjyY7777jksvvZQOHTpQrFixoGOJiEg+o5ImchiWLl1KOBzmt99+o0uXLlx66aVBRxIRkXxKJU0kAu7Ohx9+yAsvvECFChUIhUKceuqpQccSEZF8TCVN5BBSU1N59tln+fTTT2nUqBHdu3enbNmyQccSEZF8TiVNJAfr168nFAqxcuVK2rRpQ+vWrSlcuHDQsUREpABQSRM5iHnz5jFkyBAA/vGPf3DOOecEnEhERAoSlTSR/aSnpzNhwgTeeOMNTj75ZBITE6lSpUrQsUREpIBRSRPJZvv27QwZMoRvv/2Wiy66iI4dO1K8ePGgY4mISAGkkiaSZdmyZSQlJbF161Y6derEZZddhpkFHUtERAoolTQR4KOPPmL06NEce+yxhEIhateuHXQkEREp4FTSpEBLTU3lueeeY9q0aTRs2JAePXpovIaIiMQElTQpsDZs2EA4HGb58uXcdNNN3HLLLRqvISIiMUMlTQqkb775hiFDhpCRkcGjjz7KeeedF3QkERGR/6GSJgVKRkYGb7zxBhMmTOCkk04iMTGRqlWrBh1LRETkT1TSpMDYsWMHQ4cO5euvv6Z58+Z06tRJ4zVERCRmqaRJgbBixQpCoRBbtmyhY8eOtGjRQuM1REQkpqmkSb43bdo0Ro8eTZkyZRgwYAB16tQJOpKIiMghqaRJvpWWlsbzzz/P1KlTadCgAT169ODYY48NOpaIiEhEVNIkX9q0aRPhcJhly5Zxww03cNttt2m8hoiIxBWVNMl35s+fT3JyMunp6Tz88MM0adIk6EgiIiKHTSVN8o2MjAzefPNNXnvtNU488UQSExM54YQTgo4lIiJyRFTSJF/YuXMnw4YNY+7cuTRr1ozOnTtTokSJoGOJiIgcMZU0iXs//fQToVCITZs2ce+993LVVVdpvIaIiMQ9lTSJa//+978ZNWoUpUuXpn///tStWzfoSCIiIrlCJU3iUlpaGi+++CIffPABZ5xxBj179qR8+fJBxxIREck1KmkSdzZv3kw4HGbp0qVcd9113HnnnRqvISIi+Y5KmsSVBQsWkJycTGpqKr1796Zp06ZBRxIREYkKlTSJC+7OpEmTeOWVV6hWrRoDBgygevXqQccSERGJGpU0iXm7du1i+PDhzJ49m6ZNm/LAAw9QsmTJoGOJiIhElUqaxLRVq1YRCoVYv3497dq1o2XLlhqvISIiBYJKmsSsGTNmMGLECEqVKkW/fv2oX79+0JFERETyzP+1d+9xOtb5H8dfH+eE2XXYUq10QGutQ5LaLa1WpPVjK4l04MGqViKHHb9KW2rXPSanDpJF0kpUW2uXjhvbKooQsllCErv8SAiT7j6/P65LO80Oc8+Ye677nnk/Hw+Px9zXfR0+c31n5n77Xtf1/SqkSco5fPgwTzzxBPPmzaNx48YMGzaMmjVrRl2WiIhIiVJIk5Sya9cuRo8ezYcffkjnzp256aabqFBBP6YiIlL26NNPUsaaNWvIzs7m0KFDDB06lIsvvjjqkkRERCKjkCaRc3f+9Kc/8eSTT1K3bl3uv/9+6tWrF3VZIiIikVJIk0gdOHCAhx9+mLfffpsLL7yQ22+/napVq0ZdloiISOQU0iQyn3zyCbFYjG3bttGrVy9+8YtfaHgNERGRULlk7tzMLjezdWa2wcyG5/P+YDNba2arzOyvZnZ6MuuR1LFo0SKGDh3Kvn37GDlyJFdeeaUCmoiISC5J60kzs/LAo8BlwFZgqZnNdfe1uVZbAZzn7gfM7FZgNHBtsmqS6MXjcaZOncrcuXNp1KgRmZmZ1KpVK+qyREREUk4yL3eeD2xw940AZvYM0AX4JqS5+4Jc6y8Brk9iPRKx3bt3M2vWLD755BN+/vOf07t3bypWrBh1WSIiIikpmSHtVOCTXK+3Aq2PsX4f4KUk1iMRWrt2LaNHj2b//v0MHjyYSy65JOqSREREUlpKPDhgZtcD5wH5fnKbWT+gH0DVjJNYsmRJCVYnx8PdWbp0KQsWLCAjI4NrrrmGypUrqw3T0BdffKF2S2Nqv/Sltiu7khnSPgW+n+v1aeGybzGzdsBdwCXunpPfjtx9MjAZIKP2aX7BBRcUf7VS7A4ePMgjjzzCokWLaN26NQMHDmT16tWo/dLTkiVL1HZpTO2XvtR2ZVcyQ9pSoIGZnUEQzroD1+VewcxaAI8Dl7v7jiTWIiVs69atxGIxPv30U2644QauuuoqypVL6sPEIiIipUrSQpq7f2VmtwGvAOWBae7+gZmNBJa5+1wgG6gGPBsOv7DF3TsnqyYpGW+//TYTJkygUqVK3HvvvTRr1izqkkRERNJOUu9Jc/f5wPw8y+7J9XW7ZB5fSlY8HmfGjBm8+OKLNGjQgMzMTOrUqRN1WSIiImkpJR4ckPS3Z88esrOzWbNmDR07dqRPnz4aXkNEROQ4KKTJcfvwww/Jyspi//79DBw4kEsvvTTqkkRERNKeQpoUmbszf/58pk2bRu3atRk9ejRnnHFG1GWJiIiUCgppUiSHDh1i4sSJ/O1vf6NVq1YMGjSIatWqRV2WiIhIqaGQJoW2bds2YrEYW7ZsoWfPnnTt2lXDa4iIiBQzhTQplHfeeYfx48dTvnx5fvOb39CiRYuoSxIRESmVFNIkIfF4nJkzZ/L8889z9tlnk5mZyfe+972oyxIRESm1FNKkQJ9//jkPPvggq1atokOHDvTt25dKlSpFXZaIiEipppAmx7Ru3TqyhTKvCQAAFCFJREFUsrLYu3cvAwYMoF07jT8sIiJSEhTSJF/uzssvv8yUKVOoWbMmWVlZnHXWWVGXJSIiUmYopMl/ycnJ4bHHHmPBggW0bNmSO+64g+rVq0ddloiISJmikCbfsn37dmKxGB9//DE9evSgW7duGl5DREQkAgpp8o2lS5cybtw4zIwRI0bQsmXLqEsSEREpsxTShHg8zjPPPMOcOXM488wzGT58OCeddFLUZYmIiJRpCmll3N69exkzZgwrV66kXbt29OvXj8qVK0ddloiISJmnkFaGrV+/nqysLD777DP69+9P+/btoy5JREREQgppZZC789prr/H444/z3e9+l1gsRoMGDaIuS0RERHJRSCtjcnJymDx5Mq+//jrNmzdnyJAh1KhRI+qyREREJA+FtDLk3//+N7FYjI0bN9KtWze6d+9O+fLloy5LRERE8qGQVka89957jB07Fnfnrrvu4vzzz4+6JBERETkGhbRS7uuvv2b27NnMnj2b+vXrk5mZSd26daMuS0RERAqgkFaK7du3j3HjxvHee+/Rtm1bbr31Vg2vISIikiYU0kqpjz76iFgsxu7du7nlllu4/PLLMbOoyxIREZEEKaSVQq+//jqTJk2iRo0a/O53v6NRo0ZRlyQiIiKFpJBWinz55Zf8/ve/59VXX6Vp06YMHTqUjIyMqMsSERGRIlBIKyV27NhBVlYWGzZs4Oqrr6Znz54aXkNERCSNKaSVAitWrGDMmDHE43HuvPNOWrduHXVJIiIicpwU0tLY119/zXPPPcfTTz9NvXr1GD58OKecckrUZYmIiEgxUEhLU/v372f8+PEsXbqUNm3a0L9/f6pUqRJ1WSIiIlJMFNLS0KZNm4jFYuzcuZN+/fpxxRVXaHgNERGRUkYhLc288cYbPPbYY1SrVo3f/va3/OAHP4i6JBEREUkChbQ0cfjwYaZOncpLL71EkyZNGDZsGN/5zneiLktERESSRCEtDezcuZOsrCzWr1/PlVdeyQ033KDhNUREREo5hbQU9/777/Pggw9y+PBhMjMz+fGPfxx1SSIiIlICFNJSlLvz/PPPM3PmTE499VSGDx/OaaedFnVZIiIiUkIU0lLQF198wYQJE3jnnXe46KKLuO222zjhhBOiLktERERKkEJaitm8eTOxWIwdO3bQt29fOnXqpOE1REREyiCFtBSycOFCJk6cSNWqVXnggQdo3Lhx1CWJiIhIRBTSUsDhw4d54oknmDdvHo0bN2bYsGHUrFkz6rJEREQkQgppEdu1axdZWVmsW7eOzp07c9NNN1GhgppFRESkrFMaiNDq1avJzs4mJyeHYcOGcdFFF0VdkoiIiKQIhbQIuDsvvPACTz31FHXr1uWBBx6gXr16UZclIiIiKUQhrYQdOHCAhx56iMWLF3PhhRdy++23U7Vq1ajLEhERkRSjkFaCtmzZQiwWY/v27fTu3ZsuXbpoeA0RERHJl0JaCfn73//OI488QuXKlbn//vtp0qRJ1CWJiIhIClNIS7KvvvqK6dOn8+c//5lzzjmHX//619SqVSvqskRERCTFKaQl0e7du8nOzmbt2rV06tSJXr16UbFixajLEhERkTSgkJYkH3zwAdnZ2Rw4cIAhQ4bQpk2bqEsSERGRNKKQVszcnblz5zJ9+nROPvlk7rvvPk4//fSoyxIREZE0o5BWjA4ePMjDDz/MW2+9RevWrRk4cCAnnnhi1GWJiIhIGlJIKyZbt25l1KhRbNu2jRtvvJGrrrpKw2uIiIhIkSmkFYO3336bCRMmULlyZe677z6aNm0adUkiIiKS5hTSjkM8HmfGjBm8+OKLNGzYkMzMTGrXrh11WSIiIlIKKKQV0Z49e8jOzmbNmjV07NiRPn36aHgNERERKTYKaUXwj3/8g9GjR7N//34GDRpE27Ztoy5JREREShmFtEJwd+bNm8e0adOoU6cO2dnZ1K9fP+qyREREpBRSSEvQoUOHePTRR3nzzTdp1aoVgwYNolq1alGXJSIiIqWUQloCPv30U7KystiyZQvXX389V199NeXKlYu6LBERESnFFNIKsHjxYh566CHKly/PvffeS/PmzaMuSURERMoAhbSjiMfj/OEPf+CPf/wjZ599NsOHD6dOnTpRlyUiIiJlhEJaPvbs2cOYMWNYtWoVHTp0oG/fvlSqVCnqskRERKQMUUjLY926dWRlZbFv3z4GDBhAu3btoi5JREREyiCFtJC789JLLzF16lRq1apFVlYWZ555ZtRliYiISBmlkAbk5OQwceJEFi5cSMuWLbnjjjuoXr161GWJiIhIGVbmQ9r27duJxWJ8/PHH9OjRg27duml4DREREYlcmQ5p7777LuPHj8fMuOeeezj33HOjLklEREQEKKMhLR6PM2vWLJ599lnOOussMjMzOemkk6IuS0REROQbZS6k7d27lzFjxrBy5UratWvHzTffrOE1REREJOWUqZC2fv16srKy2LNnD/3796d9+/ZRlyQiIiKSrzIR0tydV199lcmTJ1OzZk1GjRpFgwYNoi5LRERE5KhKfUjLyclh0qRJvPHGG7Ro0YLBgwdTo0aNqMsSEREROaZSHdL+9a9/EYvF2LRpE926daN79+6UL18+6rJEREREClRqQ9qyZcsYN24c7s7dd99Nq1atoi5JREREJGGlLqTF43Fmz57NnDlzqF+/PsOHD+fkk0+OuiwRERGRQilVIW3fvn2MHTuW5cuXc+mll3LLLbdQuXLlqMsSERERKbRSE9I++ugjYrEYu3fv5tZbb6VDhw6YWdRliYiIiBRJqQhpr7/+OpMmTSIjI4NRo0bRsGHDqEsSEREROS5pHdK+/PJLJk+ezGuvvUazZs0YMmQIGRkZUZclIiIictySGtLM7HJgAlAemOLusTzvVwZmAC2BXcC17r45kX3v2LGDWCzGRx99RNeuXbnuuus0vIaIiIiUGkkLaWZWHngUuAzYCiw1s7nuvjbXan2Az9z9bDPrDmQB1xa07+XLlzN27Fji8Th33nknrVu3Tsa3ICIiIhKZcknc9/nABnff6O5fAs8AXfKs0wV4Mvz6OeBnVsDd/h7PYeTIkdSsWZMxY8YooImIiEiplMzLnacCn+R6vRXIm6i+Wcfd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
"
>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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1q1beeCBB/jkJz8JZKblbrvtNnbaaSfWrFnDUUcdxcyZM/nGN77BU0891VbNyuVnko+q3QFdkqS+NHPmTAD2228/mpubGT58OMOHD6e+vr5HFbY777yTG264gdbWVlauXMmyZcvYf//9u2w/ZcoUVq9ezYoVK1i9ejUjR45k3LhxzJ07l/nz57fd36+5uZnnn3++R8Hhmmuu4Z577gHgT3/6E88//zyjRo2ipqaGE088EYCTTjqJk08+Oedjbjdz5kwGDx4MwPz583nyySfbpi7Xr1/Pc889964wtWnTJhobG1mxYgUf+MAHmD59OpCZnv3617/OokWLqKmp4dVXX2XlypXvOuf8+fML/pl0xjAlSVLWPvvsw913393pe7W1te/Ydmfz5s3veH/gwIEA1NTUUF9f3/Z6TU1N27qgbdu2dfl5gBdeeIHvfe97LFy4kJ133pk5c+Z02q6jWbNmcdddd7Fy5cq2qcSUEl/5ylc488wzd/j9Ll26lK1bt76rOrVw4UIWLFjAggULGDJkCDNmzOiyL13t6dj+e+742e1rv7b39bvf/S4f+chHdvh9bl8ztXHjRo4//niuvfZazjrrLH7yk5+wZs0aHn74Yerq6thnn31oaWl51+dz+ZnkI6fbyUiS1B8ceeSRtLS0vGN90NKlS3n44YcZP348v//972lpaWHt2rU88MADPTr2+PHjWbZs2Q4/v379eoYMGcKIESNYuXIlv/rVr9reGzZsWJeX/8+ePZs77riDu+++m1mzZgFw9NFHc/PNN7d95tVXX2XVqlXv+Nx73/teGhoauPjii9uC4osvvsgvfvEL1q9fz8iRIxkyZAjPPvssv/nNb9o+t23btrYq0u23386hhx7a1sc333zzHd/z4sWLAboMqdv7et1117FlyxYA/vCHP9Dc3PUNrocMGcJll13G97//fVpbW1m/fj277rordXV1PPjgg7z00kud/sxy+Znkw8qUJElZEcFtt93Gueeey+WXX86gQYMYP348l156KePGjeO4445j2rRp7LXXXkyePLlHxx43bhwf+9jHdvj5Aw44gMmTJ3PggQeyxx57tE1HAZxxxhmccMIJ7Lbbbtx3333v+Ny+++7Lm2++ye677952Jd3RRx/Ns88+y1FHHQVkgsX111/PmDFj3vHZuXPnct5557H//vszaNAgRo8ezSWX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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Looking at the SQL code can help you understand how Vertica works.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[45]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">model</span><span class="o">.</span><span class="n">deploySQL</span><span class="p">())</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>PREDICT_RF_CLASSIFIER(&#34;PetalLengthCm&#34;, &#34;SepalWidthCm&#34;, &#34;SepalLengthCm&#34;, &#34;PetalWidthCm&#34; USING PARAMETERS model_name = &#39;public.RF_iris&#39;, match_by_pos = &#39;true&#39;)
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>The classification report is the best way to evaluate your model. In the case of multiclass classification, each of the classes will be considered as the positive one at each round. If no cutoff is informed, optimized cutoffs will be computed.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[46]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">classification_report</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Iris-setosa</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Iris-versicolor</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Iris-virginica</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>auc</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>prc_auc</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>accuracy</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>log_loss</b></td><td style="border: 1px solid white;">0.00308430532121148</td><td style="border: 1px solid white;">0.0161724436996031</td><td style="border: 1px solid white;">0.0153062308965453</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>precision</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>recall</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>f1_score</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>mcc</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>informedness</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>markedness</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>csi</b></td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td><td style="border: 1px solid white;">1.0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>cutoff</b></td><td style="border: 1px solid white;">0.8</td><td style="border: 1px solid white;">0.5</td><td style="border: 1px solid white;">0.55</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[46]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>You can also add the prediction to your vDataFrame (The method 'predict' is only possible for built-in algorithms, the method 'to_vdf' is a way to replace it when the implementation is not possible). Do not forget to change the 'X' attribute if the columns names are not the same.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[47]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;pred_Species&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalWidthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Species</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalWidthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pred_Species</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">1.10</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.30</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.10</td><td style="border: 1px solid white;">Iris-setosa</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">1.40</td><td style="border: 1px solid white;">2.90</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td><td style="border: 1px solid white;">Iris-setosa</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td><td style="border: 1px solid white;">Iris-setosa</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.20</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td><td style="border: 1px solid white;">Iris-setosa</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">2.30</td><td style="border: 1px solid white;">4.50</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.30</td><td style="border: 1px solid white;">Iris-setosa</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[47]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: iris, Number of rows: 150, Number of columns: 6</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>It is also possible to add the probability of a specific class by using the parameter 'pos_label'.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[48]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">iris</span><span class="p">,</span> <span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;prob_versicolor&quot;</span><span class="p">,</span> <span class="n">pos_label</span> <span class="o">=</span> <span class="s2">&quot;Iris-versicolor&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalWidthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>SepalLengthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Species</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PetalWidthCm</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pred_Species</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>prob_versicolor</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">1.10</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.30</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.10</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">1.40</td><td style="border: 1px solid white;">2.90</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.00</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">3.20</td><td style="border: 1px solid white;">4.40</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.20</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">1.30</td><td style="border: 1px solid white;">2.30</td><td style="border: 1px solid white;">4.50</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0.30</td><td style="border: 1px solid white;">Iris-setosa</td><td style="border: 1px solid white;">0</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[48]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: iris, Number of rows: 150, Number of columns: 7</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>The vDataFrame has also a method 'score' to do model evaluation.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[50]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">iris</span><span class="o">.</span><span class="n">score</span><span class="p">(</span><span class="s2">&quot;Species&quot;</span><span class="p">,</span> <span class="s2">&quot;pred_Species&quot;</span><span class="p">,</span> <span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;accuracy&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[50]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>1.0</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>You can play with your prediction.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[52]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">iris</span><span class="o">.</span><span class="n">hist</span><span class="p">([</span><span class="s2">&quot;pred_Species&quot;</span><span class="p">,</span> <span class="s2">&quot;Species&quot;</span><span class="p">])</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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27ZttQYNGtS+e/fuObm5uV3uv//+hpJ07bXXHtuzZ8/Oubm5XS688MI2e/fuPVSHSVIFPUNm1lxSS0m1zSxPksWz6isaMgcAAACghlm+fHn2/Pnzl3bq1Gl34vQHH3yw0YABA7becsst60tKSrRjx46vdI5Mnjz5mNGjR386evTozUVFRbZnzx4tXrw46+mnn240b9685ZmZmf7973+/9X333df47rvvXvfwww83XbRo0TJJ+vvf/5792GOPNf773//+rrurb9++nb/xjW9sLywsPKpZs2bFs2bNKpSkzZs3p0nS1VdfveFXv/rVJ6Jp6GwAACAASURBVJI0fPjwdk8++WSD8847b2vyj1CkomFygxRdNKGVpN8kTN8u6adJqgkAAADAQejatesXZYOQJPXs2fOLq666qm1xcXGtc889d0tBQcHOssv07t37i7vvvvvYdevWZQ4bNmxLly5dds2ePbvesmXLsnv37t1ZkoqKimo1adKkpOy6r7zySt1BgwZ9Xr9+/b2SNHjw4C0vv/xyvbPPPnvrL37xi+PGjRvX8qyzztp6xhln7JCkWbNm1fvd737XvKioqNa2bdvSTzzxxJ2SakYYcvcHJD1gZt9296cOUU0AAAAADkLt2rXLHW82aNCgHbNnz17xzDPPNBg7dmy7Sy+99NN69ert+fWvf91Ckn73u9+tueSSSzb37dv3i2effbbBt7/97Q533nnnB+5u//Vf/7XprrvuWvd16unateuu+fPnL3vmmWca3HzzzS3nzJmz7frrr19/7bXXtnnllVeWHX/88cXXXHNNi6Kiokpf7bo6HLAxMxsVP21rZuPLPg5BfQAAAACqyapVqzJbtmxZPG7cuM9GjBixcfHixdkjR478fNGiRcsWLVq0rF+/fl8uX748s1OnTrsmTJiwYeDAgZ+/9dZbtc8444xtL7zwQsOPP/44XZI2bNiQtmrVqkxJSk9P9927d5sknXrqqTtmz5599I4dO2pt27at1qxZsxqeeuqp2z/44IOMunXr7h0zZszmq666av2SJUuyd+7cWUuSmjVrVrJ169ZaM2fObHioj0dFw+TqxP9y+WwAAADgMPfSSy/VmzRpUvP09HTPzs7eM3Xq1PfLLvPoo482euqppxpnZGR4kyZNim+44YZPmjZtuueaa65Zd9ZZZ3Xcu3ev0tPT/c4771zb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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Some Multiclass Classifiers have the possibility to evaluate the features importance.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[53]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">features_importance</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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
"
>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>importance</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>petalwidthcm</b></td><td style="border: 1px solid white;">45.11</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>petallengthcm</b></td><td style="border: 1px solid white;">38.44</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>sepallengthcm</b></td><td style="border: 1px solid white;">13.65</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>sepalwidthcm</b></td><td style="border: 1px solid white;">2.8</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[53]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>And to draw them.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[54]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">plot_tree</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>--------------------------------------------------------------------------------
Tree Id: 0
Number of Nodes: 11
Tree Depth: 5
Tree Breadth: 6
--------------------------------------------------------------------------------
[1] (petallengthcm &lt; 1.921875 ?)
├── [2] =&gt; Iris-setosa (probability = 1.0)
└── [3] (petallengthcm &lt; 4.871875 ?)
    ├── [6] =&gt; Iris-versicolor (probability = 1.0)
    └── [7] (petalwidthcm &lt; 1.525000 ?)
        ├── [14] (sepallengthcm &lt; 6.100000 ?)
        │   ├── [28] =&gt; Iris-virginica (probability = 1.0)
        │   └── [29] (sepallengthcm &lt; 6.100000 ?)
        │       ├── [58] =&gt; Iris-virginica (probability = 1.0)
        │       └── [59] =&gt; Iris-versicolor (probability = 1.0)
        └── [15] =&gt; Iris-virginica (probability = 1.0)
</pre>
</div>
</div>

</div>
</div>

</div>