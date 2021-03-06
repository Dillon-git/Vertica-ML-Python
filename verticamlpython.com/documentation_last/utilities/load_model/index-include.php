<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="load_model">load_model<a class="anchor-link" href="#load_model">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">load_model</span><span class="p">(</span><span class="n">name</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> 
           <span class="n">cursor</span> <span class="o">=</span> <span class="kc">None</span><span class="p">,</span> 
           <span class="n">test_relation</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Loads a Vertica model and returns the associated object.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">name</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Model Name.</td> </tr>
    <tr> <td><div class="param_name">cursor</div></td> <td><div class="type">DBcursor</div></td> <td><div class = "yes">&#10003;</div></td> <td>Vertica DB cursor.</td> </tr>
    <tr> <td><div class="param_name">test_relation</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Relation used to do the testing. All the methods will use this relation for the scoring. If empty, the training relation will be used as testing.</td> </tr>
</table><h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><b>model</b> : The model.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[2]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.utilities</span> <span class="k">import</span> <span class="o">*</span>
<span class="n">model</span> <span class="o">=</span> <span class="n">load_model</span><span class="p">(</span><span class="s2">&quot;logit_titanic&quot;</span><span class="p">)</span>
<span class="n">model</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[2]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>

=======
details
=======
 predictor |coefficient|std_err |z_value |p_value 
-----------+-----------+--------+--------+--------
 Intercept |  0.27678  | 0.43558| 0.63541| 0.52516
    age    | -0.01807  | 0.00626|-2.88476| 0.00392
family_size| -0.02921  | 0.05317|-0.54926| 0.58283
   fare    |  0.01571  | 0.00329| 4.77443| 0.00000
  pclass   | -0.05925  | 0.12269|-0.48292| 0.62915
    sex    | -0.10181  | 0.16029|-0.63519| 0.52530


==============
regularization
==============
type| lambda 
----+--------
 l2 | 1.00000


===========
call_string
===========
logistic_reg(&#39;public.logit_titanic&#39;, &#39;&#34;public&#34;.VERTICA_ML_PYTHON_SPLIT_titanicclean_67_TRAIN&#39;, &#39;&#34;survived&#34;&#39;, &#39;&#34;age&#34;, &#34;family_size&#34;, &#34;fare&#34;, &#34;pclass&#34;, &#34;sex&#34;&#39;
USING PARAMETERS optimizer=&#39;cgd&#39;, epsilon=0.0001, max_iterations=100, regularization=&#39;l2&#39;, lambda=1, alpha=0)

===============
Additional Info
===============
       Name       |Value
------------------+-----
 iteration_count  |  4  
rejected_row_count|  0  
accepted_row_count| 840 </pre>
</div>

</div>

</div>
</div>

</div>