<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="vDataFrame.get_dummies">vDataFrame.get_dummies<a class="anchor-link" href="#vDataFrame.get_dummies">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vDataFrame</span><span class="o">.</span><span class="n">get_dummies</span><span class="p">(</span><span class="n">columns</span><span class="p">:</span> <span class="nb">list</span> <span class="o">=</span> <span class="p">[],</span>
                       <span class="n">max_cardinality</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">12</span><span class="p">,</span> 
                       <span class="n">prefix_sep</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;_&quot;</span><span class="p">,</span> 
                       <span class="n">drop_first</span><span class="p">:</span> <span class="nb">bool</span> <span class="o">=</span> <span class="kc">True</span><span class="p">,</span> 
                       <span class="n">use_numbers_as_suffix</span><span class="p">:</span> <span class="nb">bool</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Encodes the vcolumns using the One Hot Encoding algorithm.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">columns</div></td> <td><div class="type">list</div></td> <td><div class = "yes">&#10003;</div></td> <td>List of the vcolumns used to train the One Hot Encoding model. If empty, only the vcolumns having a cardinality lesser than 'max_cardinality' will be used.</td> </tr>
    <tr> <td><div class="param_name">max_cardinality</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>Cardinality threshold used to determine if the vcolumn will be taken into account during the encoding. This parameter is used only if the parameter 'columns' is empty.</td> </tr>
    <tr> <td><div class="param_name">prefix_sep</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Prefix delimitor of the dummies.</td> </tr>
    <tr> <td><div class="param_name">drop_first</div></td> <td><div class="type">bool</div></td> <td><div class = "yes">&#10003;</div></td> <td>Drops the first dummy to avoid the creation of correlated features.</td> </tr>
    <tr> <td><div class="param_name">use_numbers_as_suffix</div></td> <td><div class="type">bool</div></td> <td><div class = "yes">&#10003;</div></td> <td>Uses numbers as suffix instead of the vcolumns categories.</td> </tr>
</table>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><b>vDataFrame</b> : self</p>
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[34]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python</span> <span class="k">import</span> <span class="n">vDataFrame</span>
<span class="n">churn</span> <span class="o">=</span> <span class="n">vDataFrame</span><span class="p">(</span><span class="s2">&quot;public.churn&quot;</span><span class="p">)</span>
<span class="n">churn</span> <span class="o">=</span> <span class="n">churn</span><span class="o">.</span><span class="n">select</span><span class="p">([</span><span class="s2">&quot;InternetService&quot;</span><span class="p">,</span> <span class="s2">&quot;PaymentMethod&quot;</span><span class="p">,</span> <span class="s2">&quot;gender&quot;</span><span class="p">,</span> <span class="s2">&quot;Contract&quot;</span><span class="p">,</span> <span class="s2">&quot;churn&quot;</span><span class="p">])</span>
<span class="nb">print</span><span class="p">(</span><span class="n">churn</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>InternetService</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>gender</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Contract</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Churn</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">DSL</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Female</td><td style="border: 1px solid white;">One year</td><td style="border: 1px solid white;">False</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">DSL</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">False</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Electronic check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Electronic check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Female</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;object&gt;  Name: churn, Number of rows: 7043, Number of columns: 5
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[33]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">churn</span><span class="o">.</span><span class="n">get_dummies</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>InternetService</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>gender</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Contract</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Churn</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>InternetService_DSL</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>InternetService_Fiber optic</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod_Bank transfer (automatic)</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod_Credit card (automatic)</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod_Electronic check</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>gender_Female</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Contract_Month-to-month</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Contract_One year</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Churn_False</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">DSL</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Female</td><td style="border: 1px solid white;">One year</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">DSL</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Electronic check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Electronic check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Female</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[33]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: churn, Number of rows: 7043, Number of columns: 14</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[35]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Number as suffix</span>
<span class="n">churn</span><span class="o">.</span><span class="n">get_dummies</span><span class="p">(</span><span class="n">use_numbers_as_suffix</span> <span class="o">=</span> <span class="kc">True</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>InternetService</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>gender</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Contract</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Churn</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>InternetService_0</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>InternetService_1</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod_0</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod_1</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>PaymentMethod_2</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>gender_0</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Contract_0</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Contract_1</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>Churn_0</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">DSL</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Female</td><td style="border: 1px solid white;">One year</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">DSL</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Electronic check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Electronic check</td><td style="border: 1px solid white;">Male</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">Fiber optic</td><td style="border: 1px solid white;">Mailed check</td><td style="border: 1px solid white;">Female</td><td style="border: 1px solid white;">Month-to-month</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">0</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[35]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: churn, Number of rows: 7043, Number of columns: 14</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="See-Also">See Also<a class="anchor-link" href="#See-Also">&#182;</a></h3><table id="seealso">
    <tr><td><a href="../../vcolumn-methods/decode/index.php">vDataFrame[].decode</a></td> <td>Encodes the vcolumn using a user defined Encoding.</td></tr>
    <tr><td><a href="../../vcolumn-methods/discretize/index.php">vDataFrame[].discretize</a></td> <td>Discretizes the vcolumn.</td></tr>
    <tr><td><a href="../../vcolumn-methods/get_dummies/index.php">vDataFrame[].get_dummies</a></td> <td>Computes the vcolumns result of One Hot Encoding.</td></tr>
    <tr><td><a href="../../vcolumn-methods/label_encode/index.php">vDataFrame[].label_encode</a></td> <td>Encodes the vcolumn using the Label Encoding.</td></tr>
    <tr><td><a href="../../vcolumn-methods/mean_encode/index.php">vDataFrame[].mean_encode</a></td> <td>Encodes the vcolumn using the Mean Encoding of a response.</td></tr>
</table>
</div>
</div>
</div>