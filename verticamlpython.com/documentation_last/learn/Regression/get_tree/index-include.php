<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="regressor.get_tree">regressor.get_tree<a class="anchor-link" href="#regressor.get_tree">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">regressor</span><span class="o">.</span><span class="n">get_tree</span><span class="p">(</span><span class="n">tree_id</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Returns a table with all the input tree information.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">tree_id</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>Unique tree identifier. It is an integer between 0 and n_estimators - 1</td> </tr>
</table><h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><a href="../../../utilities/tablesample/index.php">tablesample</a> : An object containing the result. For more information, check out <a href="../../../utilities/tablesample/index.php">utilities.tablesample</a>.</p>

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
<div class="prompt input_prompt">In&nbsp;[25]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.ensemble</span> <span class="k">import</span> <span class="n">RandomForestRegressor</span>
<span class="n">model</span> <span class="o">=</span> <span class="n">RandomForestRegressor</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;public.RF_winequality&quot;</span><span class="p">,</span>
                              <span class="n">n_estimators</span> <span class="o">=</span> <span class="mi">20</span><span class="p">,</span>
                              <span class="n">max_features</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">,</span>
                              <span class="n">max_leaf_nodes</span> <span class="o">=</span> <span class="mi">32</span><span class="p">,</span> 
                              <span class="n">sample</span> <span class="o">=</span> <span class="mf">0.7</span><span class="p">,</span>
                              <span class="n">max_depth</span> <span class="o">=</span> <span class="mi">3</span><span class="p">,</span>
                              <span class="n">min_samples_leaf</span> <span class="o">=</span> <span class="mi">5</span><span class="p">,</span>
                              <span class="n">min_info_gain</span> <span class="o">=</span> <span class="mf">0.0</span><span class="p">,</span>
                              <span class="n">nbins</span> <span class="o">=</span> <span class="mi">32</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="s2">&quot;public.winequality&quot;</span><span class="p">,</span> <span class="p">[</span><span class="s2">&quot;alcohol&quot;</span><span class="p">,</span> <span class="s2">&quot;fixed_acidity&quot;</span><span class="p">],</span> <span class="s2">&quot;quality&quot;</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">get_tree</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>tree_id</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>node_id</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>node_depth</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>is_leaf</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>is_categorical_split</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>split_predictor</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>split_value</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>weighted_information_gain</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>left_child_id</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>right_child_id</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>prediction</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>probability/variance</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">fixed_acidity</td><td style="border: 1px solid white;">7.581250</td><td style="border: 1px solid white;">0.00486633415602404</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">alcohol</td><td style="border: 1px solid white;">10.803125</td><td style="border: 1px solid white;">0.0643770509367019</td><td style="border: 1px solid white;">4</td><td style="border: 1px solid white;">5</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">4</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">5.584767</td><td style="border: 1px solid white;">0.567138950431334</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">5</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">alcohol</td><td style="border: 1px solid white;">11.881250</td><td style="border: 1px solid white;">0.00883904720291356</td><td style="border: 1px solid white;">10</td><td style="border: 1px solid white;">11</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">10</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">6.112875</td><td style="border: 1px solid white;">0.791492088376274</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>5</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">11</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">6.515528</td><td style="border: 1px solid white;">0.734230932448594</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>6</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">alcohol</td><td style="border: 1px solid white;">10.587500</td><td style="border: 1px solid white;">0.0174251002451911</td><td style="border: 1px solid white;">6</td><td style="border: 1px solid white;">7</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>7</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">6</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">5.442211</td><td style="border: 1px solid white;">0.535605161485821</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>8</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">7</td><td style="border: 1px solid white;">2</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">False</td><td style="border: 1px solid white;">fixed_acidity</td><td style="border: 1px solid white;">12.118750</td><td style="border: 1px solid white;">0.000434248929428434</td><td style="border: 1px solid white;">14</td><td style="border: 1px solid white;">15</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>9</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">14</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">6.061475</td><td style="border: 1px solid white;">0.692942085460897</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>10</b></td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">15</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">True</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">5.647059</td><td style="border: 1px solid white;">0.463667820069391</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[25]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>