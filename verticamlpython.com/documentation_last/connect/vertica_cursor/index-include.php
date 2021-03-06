<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="vertica_cursor">vertica_cursor<a class="anchor-link" href="#vertica_cursor">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vertica_cursor</span><span class="p">(</span><span class="n">dsn</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span>
               <span class="n">method</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Reads the input DSN from the ODBCINI environment and creates a Vertica Database cursor using the input method.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">dsn</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>DSN name</td> </tr>
    <tr> <td><div class="param_name">method</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Method used to create the connection.<br>
                                                    <ul>
                                                        <li><b>auto :</b> uses vertica_python if vertica_python installed, otherwise pyodbc, otherwise jaydebeapi.</li>
                                                        <li><b>pyodbc :</b> ODBC.</li>
                                                        <li><b>jaydebeapi :</b> JDBC.</li>
                                                        <li><b>vertica_python :</b> Vertica Python Native Client (recommended).</li></ul></td> </tr>
</table><h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><b>cursor</b> : Database cursor</p>

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
<div class="prompt input_prompt">In&nbsp;[22]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.connections.connect</span> <span class="k">import</span> <span class="o">*</span>
<span class="c1"># Creating a cursor</span>
<span class="n">cur</span> <span class="o">=</span> <span class="n">vertica_cursor</span><span class="p">(</span><span class="s2">&quot;VerticaDSN&quot;</span><span class="p">)</span>
<span class="c1"># Querying</span>
<span class="n">cur</span><span class="o">.</span><span class="n">execute</span><span class="p">(</span><span class="s2">&quot;SELECT version();&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[22]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;vertica_python.vertica.cursor.Cursor at 0x11a82a8d0&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[23]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">cur</span><span class="o">.</span><span class="n">fetchone</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[23]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[&#39;Vertica Analytic Database v9.2.1-0&#39;]</pre>
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
    <tr><td><a href="../new_auto_connection/index.php">new_auto_connection</a></td> <td>Saves a connection to automatically create DB cursors.</td></tr>
    <tr><td><a href="../read_auto_connect/index.php">read_auto_connect</a></td> <td>Automatically creates a connection.</td></tr>
</table>
</div>
</div>
</div>