<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="vDataFrame.to_db">vDataFrame.to_db<a class="anchor-link" href="#vDataFrame.to_db">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vDataFrame</span><span class="o">.</span><span class="n">to_db</span><span class="p">(</span><span class="n">name</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span>
                 <span class="n">usecols</span><span class="p">:</span> <span class="nb">list</span> <span class="o">=</span> <span class="p">[],</span>
                 <span class="n">relation_type</span><span class="p">:</span> <span class="nb">str</span> <span class="o">=</span> <span class="s2">&quot;view&quot;</span><span class="p">,</span>
                 <span class="n">inplace</span><span class="p">:</span> <span class="nb">bool</span> <span class="o">=</span> <span class="kc">False</span><span class="p">,</span>
                 <span class="n">db_filter</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">,</span>
                 <span class="n">nb_split</span><span class="p">:</span> <span class="nb">int</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Saves the vDataFrame current relation to the Vertica Database.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3><table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">name</div></td> <td><div class="type">str</div></td> <td><div class = "no">&#10060;</div></td> <td>Name of the relation. To save the relation in a specific schema you can write '"my_schema"."my_relation"'. Use double quotes '"' to avoid errors due to special characters.</td> </tr>
    <tr> <td><div class="param_name">usecols</div></td> <td><div class="type">list</div></td> <td><div class = "yes">&#10003;</div></td> <td>vcolumns to select from the final vDataFrame relation. If empty, all the columns will be selected.</td> </tr>
    <tr> <td><div class="param_name">relation_type</div></td> <td><div class="type">str</div></td> <td><div class = "yes">&#10003;</div></td> <td>Type of the relation.<br>
                                                    <ul>
                                                        <li><b>view :</b> View</li>
                                                        <li><b>table :</b> Table</li>
                                                        <li><b>temporary :</b> Temporary Table</li>
        </ul></td> </tr>
    <tr> <td><div class="param_name">inplace</div></td> <td><div class="type">bool</div></td> <td><div class = "yes">&#10003;</div></td> <td>If set to True, the vDataFrame will be replaced using the new relation.</td> </tr>
    <tr> <td><div class="param_name">db_filter</div></td> <td><div class="type">str / list</div></td> <td><div class = "yes">&#10003;</div></td> <td>Filter used before creating the relation in the DB. It can be a list of conditions or an expression. This parameter is very useful to create train and test sets on TS.</td> </tr>
    <tr> <td><div class="param_name">nb_split</div></td> <td><div class="type">int</div></td> <td><div class = "yes">&#10003;</div></td> <td>If this parameter is greater than 0, it will add to the final relation a new column '_vertica_ml_python_split_' which will contain values in [0;nb_split - 1] where each category will represent approximately 1 / nb_split of the entire distribution. </td> </tr>
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
<div class="prompt input_prompt">In&nbsp;[11]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.datasets</span> <span class="k">import</span> <span class="n">load_titanic</span>
<span class="n">titanic</span> <span class="o">=</span> <span class="n">load_titanic</span><span class="p">()</span>
<span class="c1"># Doing some transformations</span>
<span class="n">titanic</span><span class="o">.</span><span class="n">get_dummies</span><span class="p">()</span>
<span class="n">titanic</span><span class="o">.</span><span class="n">normalize</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fare</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>body</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pclass</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>age</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>name</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>cabin</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>survived</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>boat</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>ticket</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>embarked</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>home.dest</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex_female</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pclass_1</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pclass_2</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch_0</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch_1</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch_2</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch_3</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch_4</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch_5</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>parch_6</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>embarked_C</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>embarked_Q</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp_0</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp_1</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp_2</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp_3</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp_4</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sibsp_5</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">-1.52458485653939825566284767748</td><td style="border: 1px solid white;">-1.9502503129565278908367342155</td><td style="border: 1px solid white;">Allison, Miss. Helen Loraine</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">1.866851401077760435621662793693</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">0.476361452530317344428951316723</td><td style="border: 1px solid white;">1.391590693589806938988264634593</td><td style="border: 1px solid white;">1.718351957456489070218766430323</td><td style="border: 1px solid white;">-0.515194873214845095325784951282</td><td style="border: 1px solid white;">-1.82404116243169099688897026934</td><td style="border: 1px solid white;">-0.389962660998658638813196185979</td><td style="border: 1px solid white;">3.4032988446260016658518137173233</td><td style="border: 1px solid white;">-0.080746501890544571964712271643787</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.040274819467791498027366578185165</td><td style="border: 1px solid white;">-0.507632846372679881779074245706</td><td style="border: 1px solid white;">-0.30642369222116871970059157132</td><td style="border: 1px solid white;">-1.448723687429805724921492057367</td><td style="border: 1px solid white;">1.74835105897043756352888762989</td><td style="border: 1px solid white;">-0.1781763946794669298088450104197</td><td style="border: 1px solid white;">-0.1283008734279738857812014957876</td><td style="border: 1px solid white;">-0.1346740711671781651944719413214</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">-0.30177333429701812091999864</td><td style="border: 1px solid white;">-1.52458485653939825566284767748</td><td style="border: 1px solid white;">-0.0105614239550127329564098413</td><td style="border: 1px solid white;">Allison, Mr. Hudson Joshua Creighton</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">1.866851401077760435621662793693</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">0.476361452530317344428951316723</td><td style="border: 1px solid white;">-0.718019768191301048660149415335</td><td style="border: 1px solid white;">1.718351957456489070218766430323</td><td style="border: 1px solid white;">-0.515194873214845095325784951282</td><td style="border: 1px solid white;">-1.82404116243169099688897026934</td><td style="border: 1px solid white;">-0.389962660998658638813196185979</td><td style="border: 1px solid white;">3.4032988446260016658518137173233</td><td style="border: 1px solid white;">-0.080746501890544571964712271643787</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.040274819467791498027366578185165</td><td style="border: 1px solid white;">-0.507632846372679881779074245706</td><td style="border: 1px solid white;">-0.30642369222116871970059157132</td><td style="border: 1px solid white;">-1.448723687429805724921492057367</td><td style="border: 1px solid white;">1.74835105897043756352888762989</td><td style="border: 1px solid white;">-0.1781763946794669298088450104197</td><td style="border: 1px solid white;">-0.1283008734279738857812014957876</td><td style="border: 1px solid white;">-0.1346740711671781651944719413214</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">-1.52458485653939825566284767748</td><td style="border: 1px solid white;">-0.3569344398481404397207534796</td><td style="border: 1px solid white;">Allison, Mrs. Hudson J C (Bessie Waldo Daniels)</td><td style="border: 1px solid white;">C22 C26</td><td style="border: 1px solid white;">1.866851401077760435621662793693</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">113781</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Montreal, PQ / Chesterville, ON</td><td style="border: 1px solid white;">0.476361452530317344428951316723</td><td style="border: 1px solid white;">1.391590693589806938988264634593</td><td style="border: 1px solid white;">1.718351957456489070218766430323</td><td style="border: 1px solid white;">-0.515194873214845095325784951282</td><td style="border: 1px solid white;">-1.82404116243169099688897026934</td><td style="border: 1px solid white;">-0.389962660998658638813196185979</td><td style="border: 1px solid white;">3.4032988446260016658518137173233</td><td style="border: 1px solid white;">-0.080746501890544571964712271643787</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.040274819467791498027366578185165</td><td style="border: 1px solid white;">-0.507632846372679881779074245706</td><td style="border: 1px solid white;">-0.30642369222116871970059157132</td><td style="border: 1px solid white;">-1.448723687429805724921492057367</td><td style="border: 1px solid white;">1.74835105897043756352888762989</td><td style="border: 1px solid white;">-0.1781763946794669298088450104197</td><td style="border: 1px solid white;">-0.1283008734279738857812014957876</td><td style="border: 1px solid white;">-0.1346740711671781651944719413214</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">-0.6451344183800711827483251581</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">-1.52458485653939825566284767748</td><td style="border: 1px solid white;">0.6129100046526171392194087075</td><td style="border: 1px solid white;">Andrews, Mr. Thomas Jr</td><td style="border: 1px solid white;">A36</td><td style="border: 1px solid white;">-0.435691956173569945178825405433</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">112050</td><td style="border: 1px solid white;">S</td><td style="border: 1px solid white;">Belfast, NI</td><td style="border: 1px solid white;">-0.484145136395191051224867122640</td><td style="border: 1px solid white;">-0.718019768191301048660149415335</td><td style="border: 1px solid white;">1.718351957456489070218766430323</td><td style="border: 1px solid white;">-0.515194873214845095325784951282</td><td style="border: 1px solid white;">0.54778896869655520601485651247</td><td style="border: 1px solid white;">-0.389962660998658638813196185979</td><td style="border: 1px solid white;">-0.2935944425821727290366499712179</td><td style="border: 1px solid white;">-0.080746501890544571964712271643787</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.040274819467791498027366578185165</td><td style="border: 1px solid white;">-0.507632846372679881779074245706</td><td style="border: 1px solid white;">-0.30642369222116871970059157132</td><td style="border: 1px solid white;">0.689703382293138372371557977476</td><td style="border: 1px solid white;">-0.57150400207205686533461107422</td><td style="border: 1px solid white;">-0.1781763946794669298088450104197</td><td style="border: 1px solid white;">-0.1283008734279738857812014957876</td><td style="border: 1px solid white;">-0.1346740711671781651944719413214</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.2951864297839290254556257484</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">-1.47183603843091257442431516</td><td style="border: 1px solid white;">-1.52458485653939825566284767748</td><td style="border: 1px solid white;">2.8296973063686344625112079923</td><td style="border: 1px solid white;">Artagaveytia, Mr. Ramon</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">-0.435691956173569945178825405433</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">None</td><td style="border: 1px solid white;">PC 17609</td><td style="border: 1px solid white;">C</td><td style="border: 1px solid white;">Montevideo, Uruguay</td><td style="border: 1px solid white;">-0.484145136395191051224867122640</td><td style="border: 1px solid white;">-0.718019768191301048660149415335</td><td style="border: 1px solid white;">1.718351957456489070218766430323</td><td style="border: 1px solid white;">-0.515194873214845095325784951282</td><td style="border: 1px solid white;">0.54778896869655520601485651247</td><td style="border: 1px solid white;">-0.389962660998658638813196185979</td><td style="border: 1px solid white;">-0.2935944425821727290366499712179</td><td style="border: 1px solid white;">-0.080746501890544571964712271643787</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td><td style="border: 1px solid white;">-0.040274819467791498027366578185165</td><td style="border: 1px solid white;">1.968331313405532477147732836418</td><td style="border: 1px solid white;">-0.30642369222116871970059157132</td><td style="border: 1px solid white;">0.689703382293138372371557977476</td><td style="border: 1px solid white;">-0.57150400207205686533461107422</td><td style="border: 1px solid white;">-0.1781763946794669298088450104197</td><td style="border: 1px solid white;">-0.1283008734279738857812014957876</td><td style="border: 1px solid white;">-0.1346740711671781651944719413214</td><td style="border: 1px solid white;">-0.069871553648533438650839486531736</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[11]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: titanic, Number of rows: 1234, Number of columns: 32</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[7]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Saving the result in the Database</span>
<span class="n">titanic</span><span class="o">.</span><span class="n">to_db</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">,</span>
              <span class="n">usecols</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;fare&quot;</span><span class="p">,</span> <span class="s2">&quot;sex&quot;</span><span class="p">,</span> <span class="s2">&quot;survived&quot;</span><span class="p">],</span>
              <span class="n">relation_type</span> <span class="o">=</span> <span class="s2">&quot;table&quot;</span><span class="p">)</span>
<span class="n">vDataFrame</span><span class="p">(</span><span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>survived</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fare</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">male</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">-0.6451344183800711827483251581</td><td style="border: 1px solid white;">male</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">0.2951864297839290254556257484</td><td style="border: 1px solid white;">male</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[7]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: titanic_normalized, Number of rows: 1234, Number of columns: 3</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[8]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Adding a split column in the final relation</span>
<span class="n">titanic</span><span class="o">.</span><span class="n">to_db</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">,</span>
              <span class="n">usecols</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;fare&quot;</span><span class="p">,</span> <span class="s2">&quot;sex&quot;</span><span class="p">,</span> <span class="s2">&quot;survived&quot;</span><span class="p">],</span>
              <span class="n">relation_type</span> <span class="o">=</span> <span class="s2">&quot;table&quot;</span><span class="p">,</span>
              <span class="n">nb_split</span> <span class="o">=</span> <span class="mi">3</span><span class="p">)</span>
<span class="n">vDataFrame</span><span class="p">(</span><span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>survived</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fare</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>_vertica_ml_python_split_</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">0</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">2</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">2</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">-0.6451344183800711827483251581</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">1</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">0.2951864297839290254556257484</td><td style="border: 1px solid white;">male</td><td style="border: 1px solid white;">2</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[8]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: titanic_normalized, Number of rows: 1234, Number of columns: 4</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[9]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Using conditions to filter data</span>
<span class="n">titanic</span><span class="o">.</span><span class="n">to_db</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">,</span>
              <span class="n">usecols</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;fare&quot;</span><span class="p">,</span> <span class="s2">&quot;sex&quot;</span><span class="p">,</span> <span class="s2">&quot;survived&quot;</span><span class="p">],</span>
              <span class="n">relation_type</span> <span class="o">=</span> <span class="s2">&quot;table&quot;</span><span class="p">,</span>
              <span class="n">db_filter</span> <span class="o">=</span> <span class="s2">&quot;sex = &#39;female&#39;&quot;</span><span class="p">)</span>
<span class="n">vDataFrame</span><span class="p">(</span><span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>survived</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fare</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">-0.0433953293097095690724228800</td><td style="border: 1px solid white;">female</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">-0.0997471107797290708051781039</td><td style="border: 1px solid white;">female</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td><td style="border: 1px solid white;">3.5675102753859816971145080739</td><td style="border: 1px solid white;">female</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[9]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: titanic_normalized, Number of rows: 420, Number of columns: 3</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[10]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="c1"># Using multiple conditions to filter data</span>
<span class="n">titanic</span><span class="o">.</span><span class="n">to_db</span><span class="p">(</span><span class="n">name</span> <span class="o">=</span> <span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">,</span>
              <span class="n">usecols</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;fare&quot;</span><span class="p">,</span> <span class="s2">&quot;sex&quot;</span><span class="p">,</span> <span class="s2">&quot;survived&quot;</span><span class="p">],</span>
              <span class="n">relation_type</span> <span class="o">=</span> <span class="s2">&quot;table&quot;</span><span class="p">,</span>
              <span class="n">db_filter</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;sex = &#39;female&#39;&quot;</span><span class="p">,</span> <span class="s2">&quot;fare &lt; 3&quot;</span><span class="p">])</span>
<span class="n">vDataFrame</span><span class="p">(</span><span class="s1">&#39;&quot;public&quot;.&quot;titanic_normalized&quot;&#39;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fare</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sex</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>survived</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">2.2335228377568673306163744003</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">-0.0433953293097095690724228800</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">-0.0997471107797290708051781039</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">-0.757307371153963162979989569746</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.8356654890504817285445765745</td><td style="border: 1px solid white;">female</td><td style="border: 1px solid white;">1.319397731077128640349332551522</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[10]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: titanic_normalized, Number of rows: 397, Number of columns: 3</pre>
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
    <tr><td><a href="../to_csv">vDataFrame.to_csv</a></td> <td>Creates a csv file of the current vDataFrame relation.</td></tr>
</table>
</div>
</div>
</div>