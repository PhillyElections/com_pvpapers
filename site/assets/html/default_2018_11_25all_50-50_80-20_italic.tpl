<htmlpageheader name="MyHeader1">
<!--    <table width="100%" class="header">
        <tr>
            <td width="1.25in" style="text-align:left;vertical-align: bottom;">
                <barcode code="{BARCODE}" type="I25" text=1 height=".33"></barcode>
            </td>
            <td width="1.375in" style="text-align:right"><img width="30px" src="{ASSETS}/images/64.png" />
            </td>
            <td width="2.25in" style="text-align:center"></td>
            <td width="1.925in" style="text-align:left"><img width="30px" src="{ASSETS}/images/64.png" />
                <td width=".7in" style="text-align:left;vertical-align: bottom;">
                    <div class="fright bc-text">&nbsp;&nbsp;{BARCODE}&nbsp;&nbsp;</div>
                </td>
            </td>
        </tr>
    </table>-->
</htmlpageheader>
<htmlpageheader name="MyHeader2">
    <table width="100%" class="header">
        <tr>
            <td></td>
            </td>
        </tr>
    </table>
</htmlpageheader>
<htmlpagefooter name="MyFooter2">
    <hr>
    <table width="100%" class="footer">
        <tr>
            <td width="33%" style="font-size:.7em;text-align:left">16-54 A(Rev 11/18)</td>
            <td width="33%" style="font-size:.7em;text-align:center">Side/<i>Lado</i> {PAGENO}</td>
            <td width="33%" style="font-size:.7em;text-align:right">&nbsp;</td>
        </tr>
    </table>
</htmlpagefooter>
<htmlpagefooter name="MyFooter1">
    <table width="100%" class="footer">
        <tr>
            <td colspan="2" style="font-size:.7em;text-align:left">(Continued on other side / <i>Continua al dorso</i>)</td>
            <td width="33%" style="font-size:.7em;text-align:right"></td>
        </tr>
        <tr>
            <td width="33%" style="font-size:.7em;text-align:left">16-54 A(Rev 11/18)</td>
            <td width="33%" style="font-size:.7em;text-align:center">Side/<i>Lado</i> {PAGENO}</td>
            <td width="33%" style="font-size:.7em;text-align:right">Page/<i>Pagina</i> ___ of/<i>de</i> ___</td>
        </tr>
    </table>
</htmlpagefooter>
<section class="block top-border">
    <div class="fifty left">
        <h2 class="text-center">
        Commonwealth of Pennsylvania</h2>
        <h3 class="text-center">
        COUNTY OF PHILADELPHIA PETITION</h3>
        <h5 class="text-center">
        HAVE NAME OF CANDIDATE PRINTED UPON THE OFFICIAL BALLOT FOR THE {ELECTION_TYPE_EN} ELECTION {ELECTION_MONTH_EN} {ELECTION_DAY}, {ELECTION_YEAR}</h5>
        <h5 class="text-center">
        COMPLETE ITEMS 1-5 PRIOR TO CIRCULATION:</h5>
    </div>
    <div class="fifty right line-left">
        <h2 class="text-center">
        <i>Estado de Pensilvania</i></h2>
        <h3 class="text-center">
        <i>PETICI&Oacute;N CONDADO DE FILADELFIA</i></h3>
        <h5 class="text-center">
        <i>INCLUYE EN LA BOLETA OFICIAL EL NOMBRE DEL CANDIDATO PARA LA ELECCI&Oacute;N {ELECTION_TYPE_ES} {ELECTION_DAY} DE {ELECTION_MONTH_ES} {ELECTION_YEAR}</i></h5>
        <h5 class="text-center">
        <i>LLENE ART&Iacute;CULOS 1-5 ANTES DE CIRCULACI&Oacute;N:</i></h5>
    </div>
</section>
<section class="form">
    <table class="form">
        <tr>
            <td class="number">1.</td>
            <td class="first">OFFICE&nbsp;SOUGHT&nbsp;/&nbsp;<i>OFICINA&nbsp;SOLICITADA:</i>&nbsp;</td>
            <td class="second">
                <table class="line">
                    <tr>
                        <td>{CANDIDATE_OFFICE} <span>&nbsp;</span></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="form">
        <tr>
            <td class="number">2.</td>
            <td class="first">NAME&nbsp;OF&nbsp;CANDIDATE&nbsp;/&nbsp;<i>NOMBRE&nbsp;DEL&nbsp;CANDIDATO:</i>&nbsp;</td>
            <td class="second">
                <table class="line">
                    <tr>
                        <td>{CANDIDATE_NAME} <span>&nbsp;</span></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="form">
        <tr>
            <td class="number">3.</td>
            <td class="first">RESIDENCE&nbsp;/&nbsp;<i>RESIDENCIA:</i>&nbsp;</td>
            <td class="second">
                <table class="line">
                    <tr>
                        <td>{CANDIDATE_ADDRESS} <span>&nbsp;</span></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="form">
        <tr>
            <td class="number">4.</td>
            <td class="first">OCCUPATION/PROFESSION&nbsp;/&nbsp;<i>OCUPACI&Oacute;N/PROFESI&Oacute;N:</i>&nbsp;</td>
            <td class="second">
                <table class="line">
                    <tr>
                        <td>{CANDIDATE_OCCUPATION} <span>&nbsp;</span></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="form">
        <tr>
            <td class="number">5.</td>
            <td class="first">PARTY&nbsp;OF&nbsp;SIGNERS&nbsp;/&nbsp;<i>PARTIDO&nbsp;DE&nbsp;FIRMANTES:</i>&nbsp;</td>
            <td class="second">
                <table class="line">
                    <tr>
                        <td>{CANDIDATE_PARTY} <span>&nbsp;</span></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</section>
<section class="block">
    <div class="fifty left">
        <ul>
            <li>
                {REQUIRED_SIGNATURES} Signatures Required.</li>
            <li>
                Petition may be used to submit for nomination the name of one candidate for one office only.</li>
            <li>
                Petition can only be circulated between {START_MONTH_EN} {START_DAY}{START_DAY_SUFFIX} and {FINISH_MONTH_EN} {FINISH_DAY}{FINISH_DAY_SUFFIX}, {FINISH_YEAR}.</li>
        </ul>
        <p>
            We the undersigned, all of whom severally declare that we are qualified electors of Philadelphia County and of the political district set forth above, that we are registered and enrolled members of the political party set forth above, and have signed no petition inconsistent herewith, do hereby petition the City Commissioners to have the candidate whose Name, Occupation / Profession, and Place of Residence are set forth above, certified to the County Board of Elections to be printed on the Primary Ballot of said Party, for the Year and Office set forth above.</p>
    </div>
    <div class="fifty right line-left">
        <ul>
            <li>
                <i>{REQUIRED_SIGNATURES} firmas requeridas.</i></li>
            <li>
                <i>Petici&oacute;n se puede utilizar para presentar para nominaci&oacute;n el nombre de un candidato solamente para una oficina.</i></li>
            <li>
                <i>Petici&oacute;n solamente puede ser circulada entre el {START_DAY} de {START_MONTH_ES} y el {FINISH_DAY} de {FINISH_MONTH_ES} {FINISH_YEAR}.</i></li>
        </ul>
        <p>
            <i>Nosotros los suscritos, solidariamente afirmamos que somos electores cualificados del condado de filadelfia y del distrito expuesto anteriormente, miembros registrados y inscritos del partido expuesto anteriormente y no hemos firmados documentos incompatible con las disposiciones presente, solicitamos a los Comisionados de la Ciudad que pongan el candidato cuyo nombre, ocupaci&oacute;n / profesi&oacute;n, y lugar de residencia expuesto anteriormente, certificados a la Junta Electoral del Condado para imprimir en la boleta primaria de dicho partido, para el a&ntilde;o y oficina expuestos anteriormente.</i></p>
    </div>
</section>
<section>
    <table class="grid">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>SIGNATURE OF ELECTOR
                    <br> <i>FIRMA DEL VOTANTE</i></th>
                <th>PRINTED NAME
                    <br> <i>NOMBRE IMPRESO</i></th>
                <th>PLACE OF RESIDENCE
                    <br> (STREET AND NUMBER)
                    <br> <i>LUGAR DE RESIDENCIA</i>
                    <br> <i>(CALLE Y NUMERO)</i></th>
                <th>DATE
                    <br>OF SIGNING
                    <br> <i>FECHA</i>
                    <br><i>DE LA FIRMA</i></th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>2</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>3</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>4</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>5</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>6</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>7</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>8</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>9</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>10</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>11</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>12</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>13</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>14</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>15</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
        </tbody>
    </table>
</section>
<section class="page2">
    <table class="grid">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>SIGNATURE OF ELECTOR
                    <br> <i>FIRMA DEL VOTANTE</i></th>
                <th>PRINTED NAME
                    <br> NOMBRE IMPRESO</th>
                <th>PLACE OF RESIDENCE
                    <br> (STREET AND NUMBER)
                    <br> <i>LUGAR DE RESIDENCIA</i>
                    <br> <i>(CALLE Y NUMERO)</i></th>
                <th>DATE
                    <br>OF SIGNING
                    <br> <i>FECHA</i>
                    <br><i>DE LA FIRMA</i></th>
            </tr>
        </thead>
        <tbody>
            <tr><td>16</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>17</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>18</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>19</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>20</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>21</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>22</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>23</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>24</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>25</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>26</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>27</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>28</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>29</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>30</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
        </tbody>
    </table>
</section>
<section class="block">
    <div class="fifty left">
        <h3>AFFIDAVIT OF CIRCULATOR</h3>
        <div class="ss"><span class="left eighty-five">COMMONWEALTH OF PENNSYLVANIA / COUNTY OF PHILADELPHIA</span></div>
        <p>I do swear (or affirm) that I am a qualified elector, duly registered and enrolled as a member of the political party designated in this nomination petition; that my residence is as set forth below; that the signers to the foregoing petition signed the same with full knowledge of the contents thereof; that their respective residences are correctly stated therein; that each signed on the date set opposite his or her name; that to the best of my knowledge and belief, the signers are qualified electors, registered and enrolled members of the political party and of the political district referred to in this petition, and that they are residents of the City &amp; County of Philadelphia.</p>
        <h6>CIRCULATORS COMPLETE ITEMS 1-3 IN THE PRESENCE OF A NOTARY:</h6>
    </div>
    <div class="fifty right line-left">
        <h3><i>DECLARACI&Oacute;N JURADA DE CIRCULADO</i></h3>
        <div class="ss"><span class="left eighty-five"><i>ESTADO DE PENSILVANIA / CONDADO DE FILADELFIA</i></span></div>
        <p><i>Yo juro (o afirmo) que yo soy un elector cualificado, debidamente registrado, e inscrito como miembro del partido designado en esta petici&oacute;n de nominaci&oacute;n; que mi residencia es como se indica a continuaci&oacute;n; que los firmantes a la petici&oacute;n anterior firmaron con pleno conocimiento del contenido de lo mismo; que sus respectivos lugares de residencia est&aacute;n correctamente indicados; que cada firmo en la fecha opuesta su nombre; es de mi consentimiento y creencia, los firmantes son electores cualificados, miembros registrados y inscritos del partido pol&iacute;tico y distrito electoral referido en esta petici&oacute;n, y que son los residentes de la ciudad y condado de Filadelfia.</i></p>
        <h6><i>CIRCULADORES LLENEN ART&Iacute;CULOS 1-3 EN PRESENCIA DE UN NOTARIO:</i></h6>
    </div>
</section>
<section class="form">
    <div class="right twenty-five office-use">Office Use</div>
    <div class="left seventy-five">
        <div>
            <div class="left">
                <table class="form">
                    <tr>
                        <td class="number">1.</td>
                        <td class="first">Signature&nbsp;of&nbsp;Circulator&nbsp;/&nbsp;<i>Firma&nbsp;de&nbsp;Circulador:</i>&nbsp;</td>
                        <td class="second">
                            <table class="line-long">
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class="form">
                    <tr>
                        <td class="number">2.</td>
                        <td class="first">Printed&nbsp;Name&nbsp;of&nbsp;Circulator&nbsp;/&nbsp;<i>Nombre&nbsp;impreso&nbsp;de&nbsp;Circulador:</i>&nbsp;</td>
                        <td class="second">
                            <table class="line-long">
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table class="form">
                    <tr>
                        <td class="number">3.</td>
                        <td class="first">Residence&nbsp;of&nbsp;Circulator&nbsp;/&nbsp;<i>Lugar&nbsp;de&nbsp;residencia&nbsp;de&nbsp;Circulador:</i>&nbsp;</td>
                        <td class="second">
                            <table class="line-long">
                                <tr>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            <div>
            <div class="sixty-seven left">
                <br>
                <h4>Sworn to and subscribed before me this / <i>Jurado y suscrito ante m&iacute; el</i> <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> day of / <i>d&iacute;a de<i> <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> of / <i>de</i> {FINISH_YEAR} </h4>
                <div class="full">&nbsp;</div>
                <div class="full">&nbsp;</div>
                <p>(Official Title / <i>T&iacute;tulo Oficial</i>)</p>
                <div>My commission expires / <i>Mi comisi&oacute;n expira</i>
                    <span class="line">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
            <div class="right thirty-three notary-use">Notary</div>
        <div>
    <div>
</section>
</body>
