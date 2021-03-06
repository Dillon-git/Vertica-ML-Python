<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="classifier.deploySQL">classifier.deploySQL<a class="anchor-link" href="#classifier.deploySQL">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p><b>Definition for Multiclass Classifier:</b></p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">classifier</span><span class="o">.</span><span class="n">deploySQL</span><span class="p">(</span><span class="n">pos_label</span> <span class="o">=</span> <span class="kc">None</span><span class="p">,</span> 
                     <span class="n">cutoff</span><span class="p">:</span> <span class="nb">float</span> <span class="o">=</span> <span class="o">-</span><span class="mi">1</span><span class="p">,</span> 
                     <span class="n">allSQL</span><span class="p">:</span> <span class="nb">bool</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p><b>Definition for Binary Classifier:</b></p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">classifier</span><span class="o">.</span><span class="n">deploySQL</span><span class="p">(</span><span class="n">cutoff</span><span class="p">:</span> <span class="nb">float</span> <span class="o">=</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Returns the SQL code needed to deploy the model.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">pos_label</div></td> <td><div class="type">int / float / str </div></td> <td><div class = "yes">&#10003;</div></td> <td>Label to consider as positive. All the other classes will be merged and considered as negative in case of multi classification.</td> </tr>
    <tr> <td><div class="param_name">cutoff</div></td> <td><div class="type">float</div></td> <td><div class = "yes">&#10003;</div></td> <td>Cutoff for which the tested category will be accepted as prediction. If the cutoff is not between 0 and 1, a probability will be returned.</td> </tr>
    <tr> <td><div class="param_name">allSQL</div></td> <td><div class="type">bool</div></td> <td><div class = "yes">&#10003;</div></td> <td>If set to True, the output will be a list of the different SQL codes needed to deploy the different categories score.</td> </tr>
</table>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><b>str / list</b> : the SQL code needed to deploy the model.</p>
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[7]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Multiclass Classification</span>
<span class="kn">from</span> <span class="nn">vertica_ml_python.learn.ensemble</span> <span class="k">import</span> <span class="n">RandomForestClassifier</span>
<span class="n">model</span> <span class="o">=</span> <span class="n">RandomForestClassifier</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;public.RF_iris&quot;</span><span class="p">,</span>
                               <span class="n">n_estimators</span> <span class="o">=</span> <span class="mi">20</span><span class="p">,</span>
                               <span class="n">max_features</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">,</span>
                               <span class="n">max_leaf_nodes</span> <span class="o">=</span> <span class="mi">32</span><span class="p">,</span> 
                               <span class="n">sample</span> <span class="o">=</span> <span class="mf">0.7</span><span class="p">,</span>
                               <span class="n">max_depth</span> <span class="o">=</span> <span class="mi">3</span><span class="p">,</span>
                               <span class="n">min_samples_leaf</span> <span class="o">=</span> <span class="mi">5</span><span class="p">,</span>
                               <span class="n">min_info_gain</span> <span class="o">=</span> <span class="mf">0.0</span><span class="p">,</span>
                               <span class="n">nbins</span> <span class="o">=</span> <span class="mi">32</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="s2">&quot;public.iris&quot;</span><span class="p">,</span> <span class="p">[</span><span class="s2">&quot;PetalLengthCm&quot;</span><span class="p">,</span> <span class="s2">&quot;PetalWidthCm&quot;</span><span class="p">],</span> <span class="s2">&quot;Species&quot;</span><span class="p">)</span>
<span class="c1"># Deploying the prediction</span>
<span class="nb">print</span><span class="p">(</span><span class="n">model</span><span class="o">.</span><span class="n">deploySQL</span><span class="p">())</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>PREDICT_RF_CLASSIFIER(&#34;PetalLengthCm&#34;, &#34;PetalWidthCm&#34; USING PARAMETERS model_name = &#39;public.RF_iris&#39;, match_by_pos = &#39;true&#39;)
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[12]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Deploying one class probability</span>
<span class="nb">print</span><span class="p">(</span><span class="n">model</span><span class="o">.</span><span class="n">deploySQL</span><span class="p">(</span><span class="n">pos_label</span> <span class="o">=</span> <span class="s2">&quot;Iris-versicolor&quot;</span><span class="p">))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>PREDICT_RF_CLASSIFIER(&#34;PetalLengthCm&#34;, &#34;PetalWidthCm&#34; USING PARAMETERS model_name = &#39;public.RF_iris&#39;, class = &#39;Iris-versicolor&#39;, type = &#39;probability&#39;, match_by_pos = &#39;true&#39;)
</pre>
</div>
</div>

</div>
</div>

</div>