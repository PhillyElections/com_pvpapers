<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Output Model for Pvpapers Component.
 *
 * @license    GNU/GPL
 */
class PvpapersModelOutput extends JModel
{
    /**
     * current id.
     *
     * @var int
     */
    public $_id;

    /**
     * current row.
     *
     * @var mixed
     */
    public $_data;

    /**
     * filename of template.
     *
     * @var string
     */
    public $_template = '';

    /**
     * filename of css.
     *
     * @var string
     */
    public $_css = '';

    /**
     * array of values.
     *
     * @var array
     */
    public $_values = array(
        'ASSETS' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'BARCODE' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'CANDIDATE_ADDRESS' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_ADDRESS_TOGGLE' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'CANDIDATE_DISTRICT' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'CANDIDATE_NAME' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_NAME_TOGGLE' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_OCCUPATION' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_OCCUPATION_TOGGLE' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_OFFICE' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_OFFICE_TOGGLE' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_PARTY' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_PARTY_ABBR' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'CANDIDATE_PARTY_ES' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'ELECTION_DAY' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'ELECTION_MONTH_EN' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'ELECTION_MONTH_ES' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'ELECTION_TYPE_EN' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'ELECTION_TYPE_ES' => array(
            'value' => '&nbsp;',
            'case' => 'u',
            ),
        'ELECTION_YEAR' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'FINISH_DAY' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'FINISH_DAY_SUFFIX' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'FINISH_MONTH_EN' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'FINISH_MONTH_ES' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'FINISH_YEAR' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'REQUIRED_SIGNATURES' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'START_DAY' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'START_DAY_SUFFIX' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'START_MONTH_EN' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'START_MONTH_ES' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'START_YEAR' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'WARD' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'DIVISION' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'WARD_TOGGLE' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'DIVISION_TOGGLE' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'CANDIDATE_PHONE' => array(
            'value' => '&nbsp;',
            'case' => '',
            ),
        'Z01'=>array('value'=>'&nbsp;','case'=>'',),
        'Z02'=>array('value'=>'&nbsp;','case'=>'',),
        'Z03'=>array('value'=>'&nbsp;','case'=>'',),
        'Z04'=>array('value'=>'&nbsp;','case'=>'',),
        'Z05'=>array('value'=>'&nbsp;','case'=>'',),
        'SN01'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN02'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN03'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN04'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN05'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN06'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN07'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN08'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN09'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN10'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN11'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN12'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN13'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN14'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN15'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN16'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN17'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN18'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN19'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN20'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN21'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN22'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN23'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN24'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN25'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN26'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN27'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN28'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN29'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN30'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN31'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN32'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN33'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN34'=>array('value'=>'&nbsp;','case'=>'u',),
        'SN35'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM01'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM02'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM03'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM04'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM05'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM06'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM07'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM08'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM09'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM10'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM11'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM12'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM13'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM14'=>array('value'=>'&nbsp;','case'=>'u',),
        'FM15'=>array('value'=>'&nbsp;','case'=>'u',),
        'L01'=>array('value'=>'&nbsp;','case'=>'u',),
        'L02'=>array('value'=>'&nbsp;','case'=>'u',),
        'L03'=>array('value'=>'&nbsp;','case'=>'u',),
        'L04'=>array('value'=>'&nbsp;','case'=>'u',),
        'L05'=>array('value'=>'&nbsp;','case'=>'u',),
        'L06'=>array('value'=>'&nbsp;','case'=>'u',),
        'L07'=>array('value'=>'&nbsp;','case'=>'u',),
        'L08'=>array('value'=>'&nbsp;','case'=>'u',),
        'L09'=>array('value'=>'&nbsp;','case'=>'u',),
        'L10'=>array('value'=>'&nbsp;','case'=>'u',),
        'L11'=>array('value'=>'&nbsp;','case'=>'u',),
        'L12'=>array('value'=>'&nbsp;','case'=>'u',),
        'L13'=>array('value'=>'&nbsp;','case'=>'u',),
        'L14'=>array('value'=>'&nbsp;','case'=>'u',),
        'L15'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA01'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA02'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA03'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA04'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA05'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA06'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA07'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA08'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA09'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA10'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA11'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA12'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA13'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA14'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA15'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA16'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA17'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA18'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA19'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA20'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA21'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA22'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA23'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA24'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA25'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA26'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA27'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA28'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA29'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA30'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA31'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA32'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA33'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA34'=>array('value'=>'&nbsp;','case'=>'u',),
        'SA35'=>array('value'=>'&nbsp;','case'=>'u',),
        'N01'=>array('value'=>'&nbsp;','case'=>'u',),
        'N02'=>array('value'=>'&nbsp;','case'=>'u',),
        'N03'=>array('value'=>'&nbsp;','case'=>'u',),
        'N04'=>array('value'=>'&nbsp;','case'=>'u',),
        'N05'=>array('value'=>'&nbsp;','case'=>'u',),
        'N06'=>array('value'=>'&nbsp;','case'=>'u',),
        'N07'=>array('value'=>'&nbsp;','case'=>'u',),
        'N08'=>array('value'=>'&nbsp;','case'=>'u',),
        'N09'=>array('value'=>'&nbsp;','case'=>'u',),
        'N10'=>array('value'=>'&nbsp;','case'=>'u',),
        'N11'=>array('value'=>'&nbsp;','case'=>'u',),
        'N12'=>array('value'=>'&nbsp;','case'=>'u',),
        'N13'=>array('value'=>'&nbsp;','case'=>'u',),
        'N14'=>array('value'=>'&nbsp;','case'=>'u',),
        'N15'=>array('value'=>'&nbsp;','case'=>'u',),
        'N16'=>array('value'=>'&nbsp;','case'=>'u',),
        'N17'=>array('value'=>'&nbsp;','case'=>'u',),
        'N18'=>array('value'=>'&nbsp;','case'=>'u',),
        'N19'=>array('value'=>'&nbsp;','case'=>'u',),
        'N20'=>array('value'=>'&nbsp;','case'=>'u',),
        'N21'=>array('value'=>'&nbsp;','case'=>'u',),
        'N22'=>array('value'=>'&nbsp;','case'=>'u',),
        'N23'=>array('value'=>'&nbsp;','case'=>'u',),
        'N24'=>array('value'=>'&nbsp;','case'=>'u',),
        'N25'=>array('value'=>'&nbsp;','case'=>'u',),
        'N26'=>array('value'=>'&nbsp;','case'=>'u',),
        'N27'=>array('value'=>'&nbsp;','case'=>'u',),
        'N28'=>array('value'=>'&nbsp;','case'=>'u',),
        'N29'=>array('value'=>'&nbsp;','case'=>'u',),
        'N30'=>array('value'=>'&nbsp;','case'=>'u',),
        'N31'=>array('value'=>'&nbsp;','case'=>'u',),
        'N32'=>array('value'=>'&nbsp;','case'=>'u',),
        'N33'=>array('value'=>'&nbsp;','case'=>'u',),
        'N34'=>array('value'=>'&nbsp;','case'=>'u',),
        'N35'=>array('value'=>'&nbsp;','case'=>'u',),
        'N36'=>array('value'=>'&nbsp;','case'=>'u',),
        'N37'=>array('value'=>'&nbsp;','case'=>'u',),
        'N38'=>array('value'=>'&nbsp;','case'=>'u',),
        'N39'=>array('value'=>'&nbsp;','case'=>'u',),
        'N40'=>array('value'=>'&nbsp;','case'=>'u',),
        'A01'=>array('value'=>'&nbsp;','case'=>'u',),
        'A02'=>array('value'=>'&nbsp;','case'=>'u',),
        'A03'=>array('value'=>'&nbsp;','case'=>'u',),
        'A04'=>array('value'=>'&nbsp;','case'=>'u',),
        'A05'=>array('value'=>'&nbsp;','case'=>'u',),
        'A06'=>array('value'=>'&nbsp;','case'=>'u',),
        'A07'=>array('value'=>'&nbsp;','case'=>'u',),
        'A08'=>array('value'=>'&nbsp;','case'=>'u',),
        'A09'=>array('value'=>'&nbsp;','case'=>'u',),
        'A10'=>array('value'=>'&nbsp;','case'=>'u',),
        'A11'=>array('value'=>'&nbsp;','case'=>'u',),
        'A12'=>array('value'=>'&nbsp;','case'=>'u',),
        'A13'=>array('value'=>'&nbsp;','case'=>'u',),
        'A14'=>array('value'=>'&nbsp;','case'=>'u',),
        'A15'=>array('value'=>'&nbsp;','case'=>'u',),
        'A16'=>array('value'=>'&nbsp;','case'=>'u',),
        'A17'=>array('value'=>'&nbsp;','case'=>'u',),
        'A18'=>array('value'=>'&nbsp;','case'=>'u',),
        'A19'=>array('value'=>'&nbsp;','case'=>'u',),
        'A20'=>array('value'=>'&nbsp;','case'=>'u',),
        'A21'=>array('value'=>'&nbsp;','case'=>'u',),
        'A22'=>array('value'=>'&nbsp;','case'=>'u',),
        'A23'=>array('value'=>'&nbsp;','case'=>'u',),
        'A24'=>array('value'=>'&nbsp;','case'=>'u',),
        'A25'=>array('value'=>'&nbsp;','case'=>'u',),
        'A26'=>array('value'=>'&nbsp;','case'=>'u',),
        'A27'=>array('value'=>'&nbsp;','case'=>'u',),
        'A28'=>array('value'=>'&nbsp;','case'=>'u',),
        'A29'=>array('value'=>'&nbsp;','case'=>'u',),
        'A30'=>array('value'=>'&nbsp;','case'=>'u',),
        'A31'=>array('value'=>'&nbsp;','case'=>'u',),
        'A32'=>array('value'=>'&nbsp;','case'=>'u',),
        'A33'=>array('value'=>'&nbsp;','case'=>'u',),
        'A34'=>array('value'=>'&nbsp;','case'=>'u',),
        'A35'=>array('value'=>'&nbsp;','case'=>'u',),
        'W01'=>array('value'=>'&nbsp;','case'=>'',),
        'W02'=>array('value'=>'&nbsp;','case'=>'',),
        'W01'=>array('value'=>'&nbsp;','case'=>'',),
        'W02'=>array('value'=>'&nbsp;','case'=>'',),
        'I01'=>array('value'=>'&nbsp;','case'=>'',),
        'I02'=>array('value'=>'&nbsp;','case'=>'',),
        'I03'=>array('value'=>'&nbsp;','case'=>'',),
        'P01'=>array('value'=>'&nbsp;','case'=>'u',),
        'P02'=>array('value'=>'&nbsp;','case'=>'u',),
        'P03'=>array('value'=>'&nbsp;','case'=>'u',),
        'P04'=>array('value'=>'&nbsp;','case'=>'u',),
        'P05'=>array('value'=>'&nbsp;','case'=>'u',),
        'P06'=>array('value'=>'&nbsp;','case'=>'u',),
        'P07'=>array('value'=>'&nbsp;','case'=>'u',),
        'P08'=>array('value'=>'&nbsp;','case'=>'u',),
        'P09'=>array('value'=>'&nbsp;','case'=>'u',),
        'P10'=>array('value'=>'&nbsp;','case'=>'u',),
        'P11'=>array('value'=>'&nbsp;','case'=>'u',),
        'P12'=>array('value'=>'&nbsp;','case'=>'u',),
        'P13'=>array('value'=>'&nbsp;','case'=>'u',),
        'P14'=>array('value'=>'&nbsp;','case'=>'u',),
        'P15'=>array('value'=>'&nbsp;','case'=>'u',),
        'P16'=>array('value'=>'&nbsp;','case'=>'u',),
        'P17'=>array('value'=>'&nbsp;','case'=>'u',),
        'P18'=>array('value'=>'&nbsp;','case'=>'u',),
        'P19'=>array('value'=>'&nbsp;','case'=>'u',),
        'P20'=>array('value'=>'&nbsp;','case'=>'u',),
        'P21'=>array('value'=>'&nbsp;','case'=>'u',),
        'P22'=>array('value'=>'&nbsp;','case'=>'u',),
        'P23'=>array('value'=>'&nbsp;','case'=>'u',),
        'P24'=>array('value'=>'&nbsp;','case'=>'u',),
        'P25'=>array('value'=>'&nbsp;','case'=>'u',),
        '001'=>array('value'=>'&nbsp;','case'=>'u',),
        '002'=>array('value'=>'&nbsp;','case'=>'u',),
        '003'=>array('value'=>'&nbsp;','case'=>'u',),
        '004'=>array('value'=>'&nbsp;','case'=>'u',),
        '005'=>array('value'=>'&nbsp;','case'=>'u',),
        '006'=>array('value'=>'&nbsp;','case'=>'u',),
        '007'=>array('value'=>'&nbsp;','case'=>'u',),
        '008'=>array('value'=>'&nbsp;','case'=>'u',),
        '009'=>array('value'=>'&nbsp;','case'=>'u',),
        '010'=>array('value'=>'&nbsp;','case'=>'u',),
        '011'=>array('value'=>'&nbsp;','case'=>'u',),
        '012'=>array('value'=>'&nbsp;','case'=>'u',),
        '013'=>array('value'=>'&nbsp;','case'=>'u',),
        '014'=>array('value'=>'&nbsp;','case'=>'u',),
        '015'=>array('value'=>'&nbsp;','case'=>'u',),
        '016'=>array('value'=>'&nbsp;','case'=>'u',),
        '017'=>array('value'=>'&nbsp;','case'=>'u',),
        '018'=>array('value'=>'&nbsp;','case'=>'u',),
        '019'=>array('value'=>'&nbsp;','case'=>'u',),
        '020'=>array('value'=>'&nbsp;','case'=>'u',),
        '021'=>array('value'=>'&nbsp;','case'=>'u',),
        '022'=>array('value'=>'&nbsp;','case'=>'u',),
        '023'=>array('value'=>'&nbsp;','case'=>'u',),
        '024'=>array('value'=>'&nbsp;','case'=>'u',),
        '025'=>array('value'=>'&nbsp;','case'=>'u',),
        '026'=>array('value'=>'&nbsp;','case'=>'u',),
        '027'=>array('value'=>'&nbsp;','case'=>'u',),
        '028'=>array('value'=>'&nbsp;','case'=>'u',),
        '029'=>array('value'=>'&nbsp;','case'=>'u',),
        '030'=>array('value'=>'&nbsp;','case'=>'u',),
        '031'=>array('value'=>'&nbsp;','case'=>'u',),
        '032'=>array('value'=>'&nbsp;','case'=>'u',),
        '033'=>array('value'=>'&nbsp;','case'=>'u',),
        '034'=>array('value'=>'&nbsp;','case'=>'u',),
        '035'=>array('value'=>'&nbsp;','case'=>'u',),
    );

    /**
     *  sets a runtime path,
     *  checks for test file generation,
     *  retrieves the ID from the request - if any.
     */
    public function __construct()
    {
        parent::__construct();

        // god i hate this.
        $this->_values['ASSETS']['value'] = JPATH_COMPONENT_SITE.'/assets';

        if (JRequest::getVar('test')) {
            $this->_test = JRequest::getVar('test', 'DEMOCRATIC') === 'DEMOCRATIC' ? 'DEMOCRATIC' : 'REPUBLICAN';
            $this->setId(0);
            $this->_css = JRequest::getVar('tmpl', 'default') . '.css';
            $this->_template = JRequest::getVar('tmpl', 'default') . '.tpl';

            return;
        }

        $array = JRequest::getVar('cid', 0, '', 'array');
        $index = JRequest::getInt('id');
        if ($index) {
            // in case we're updating and check() failed
            $this->setId((int) $index);
        } else {
            $this->setId((int) $array[0]);
        }

        if ($this->_id) {
            $this->getData();
        }
    }

    public function translate($value)
    {
        $replacements = array(
            'JANUARY' => 'enero',
            'FEBRUARY' => 'febrero',
            'MARCH' => 'marzo',
            'APRIL' => 'abril',
            'MAY' => 'mayo',
            'JUNE' => 'junio',
            'JULY' => 'julio',
            'AUGUST' => 'agosto',
            'SEPTEMBER' => 'septiembre',
            'OCTOBER' => 'octubre',
            'NOVEMBER' => 'noviembre',
            'DECEMBER' => 'diciembre',
            'SPECIAL' => 'Especial',
            'PRIMARY' => 'Primaria',
            'GENERAL' => 'General',
            'DEMOCRATIC' => 'DEMOCRÁTICO',
            'REPUBLICAN' => 'REPUBLICANO',
        );

        return $replacements[strtoupper($value)] ? $replacements[strtoupper($value)] : $value;
    }

    /**
     * Gets the values.
     *
     * @return @mixed The values
     */
    public function getValues()
    {
        if ($this->_test) {
            $party = $this->_test;
            $signatures = JRequest::getVar('signatures', 10);
            $finish = JFactory::getDate('2018-03-06');
            $start = JFactory::getDate('2018-02-13');
            $election = JFactory::getDate('2018-05-15');

            // First day to circulate Feb 13
            // Last day to file March 6

            $this->_values['BARCODE']['value'] = '00000000';
            $this->_values['CANDIDATE_PARTY']['value'] = $party;
            $this->_values['CANDIDATE_PARTY_ABBR']['value'] = substr($party, 0, 1);
            $this->_values['CANDIDATE_PARTY_ES']['value'] = $this->translate($party);
            $this->_values['ELECTION_DAY']['value'] = date('j', $election->toUnix());
            $this->_values['ELECTION_MONTH_EN']['value'] = date('F', $election->toUnix());
            $this->_values['ELECTION_MONTH_ES']['value'] = $this->translate(date('F', $election->toUnix()));
            $this->_values['ELECTION_TYPE_EN']['value'] = 'primary';
            $this->_values['ELECTION_TYPE_ES']['value'] = $this->translate('primary');
            $this->_values['ELECTION_YEAR']['value'] = date('Y', $election->toUnix());
            $this->_values['FINISH_DAY']['value'] = date('j', $finish->toUnix());
            $this->_values['FINISH_DAY_SUFFIX']['value'] = date('S', $finish->toUnix());
            $this->_values['FINISH_MONTH_EN']['value'] = date('F', $finish->toUnix());
            $this->_values['FINISH_MONTH_ES']['value'] = $this->translate(date('F', $finish->toUnix()));
            $this->_values['FINISH_YEAR']['value'] = date('Y', $finish->toUnix());
            $this->_values['REQUIRED_SIGNATURES']['value'] = $signatures;
            $this->_values['START_DAY']['value'] = date('j', $start->toUnix());
            $this->_values['START_DAY_SUFFIX']['value'] = date('S', $start->toUnix());
            $this->_values['START_MONTH_EN']['value'] = date('F', $start->toUnix());
            $this->_values['START_MONTH_ES']['value'] = $this->translate(date('F', $start->toUnix()));
            $this->_values['START_YEAR']['value'] = date('Y', $start->toUnix());

            return $this->_values;
        }

        $data = $this->getData();

        // ordinal suffix for day is date("S", $datevalue);
        $finish = JFactory::getDate($data->signing_stop);
        $start = JFactory::getDate($data->signing_start);
        $election = JFactory::getDate($data->election_date);

        $this->_values['BARCODE']['value'] = str_pad($data->id, 8, '0', STR_PAD_LEFT);
        $this->_values['CANDIDATE_ADDRESS']['value'] = $data->candidate_address . ($data->candidate_address2 ? ' ' . $data->candidate_address2 : '');
        $this->_values['CANDIDATE_ADDRESS_TOGGLE']['value'] = $data->candidate_self_circulating == 'yes' ? ($data->candidate_address . ($data->candidate_address2 ? ' ' . $data->candidate_address2 : '')) : '&nbsp;';
        $this->_values['CANDIDATE_DISTRICT']['value'] = $data->candidate_district ? $data->candidate_district : '&nbsp;';
        // override below
        $this->_values['CANDIDATE_NAME']['value'] = $data->candidate_name;
        $this->_values['CANDIDATE_NAME_TOGGLE']['value'] = $data->candidate_self_circulating == 'yes' ? $data->candidate_name : '&nbsp;';
        $this->_values['CANDIDATE_OCCUPATION']['value'] = $data->candidate_occupation;
        $this->_values['CANDIDATE_OCCUPATION_TOGGLE']['value'] = $data->candidate_occupation;
        $this->_values['CANDIDATE_OFFICE']['value'] = ($data->candidate_district ? 'CITY COUNCIL' : $data->office_name);
        $this->_values['CANDIDATE_PARTY']['value'] = $data->candidate_party;
        $this->_values['CANDIDATE_PARTY_ABBR']['value'] = substr($data->candidate_party, 0, 1);
        $this->_values['CANDIDATE_PARTY_ES']['value'] = $this->translate($data->candidate_party);
        $this->_values['ELECTION_DAY']['value'] = date('j', $election->toUnix());
        $this->_values['ELECTION_MONTH_EN']['value'] = date('F', $election->toUnix());
        $this->_values['ELECTION_MONTH_ES']['value'] = $this->translate(date('F', $election->toUnix()));
        $this->_values['ELECTION_TYPE_EN']['value'] = $data->election_type;
        $this->_values['ELECTION_TYPE_ES']['value'] = $this->translate($data->election_type);
        $this->_values['ELECTION_YEAR']['value'] = date('Y', $election->toUnix());
        $this->_values['FINISH_DAY']['value'] = date('j', $finish->toUnix());
        $this->_values['FINISH_DAY_SUFFIX']['value'] = date('S', $finish->toUnix());
        $this->_values['FINISH_MONTH_EN']['value'] = date('F', $finish->toUnix());
        $this->_values['FINISH_MONTH_ES']['value'] = $this->translate(date('F', $finish->toUnix()));
        $this->_values['FINISH_YEAR']['value'] = date('Y', $finish->toUnix());
        $this->_values['REQUIRED_SIGNATURES']['value'] = $data->signatures;
        $this->_values['START_DAY']['value'] = date('j', $start->toUnix());
        $this->_values['START_DAY_SUFFIX']['value'] = date('S', $start->toUnix());
        $this->_values['START_MONTH_EN']['value'] = date('F', $start->toUnix());
        $this->_values['START_MONTH_ES']['value'] = $this->translate(date('F', $start->toUnix()));
        $this->_values['START_YEAR']['value'] = date('Y', $start->toUnix());
        $this->_values['WARD']['value'] = $data->candidate_ward > 0 ? sprintf('%02d', $data->candidate_ward): '&nbsp;';
        $this->_values['DIVISION']['value'] = $data->candidate_division ? sprintf('%02d', $data->candidate_division) : '&nbsp;';
        $this->_values['WARD_TOGGLE']['value'] = $data->candidate_self_circulating == 'yes' ? sprintf('%02d', $data->candidate_ward): '&nbsp;';
        $this->_values['DIVISION_TOGGLE']['value'] = $data->candidate_self_circulating == 'yes'  ? sprintf('%02d', $data->candidate_division) : '&nbsp;';
        $matches  = '';
        preg_match('/^(\d{3})(\d{3})(\d{4})$/', $data->candidate_phone, $matches);

        $full_sig_name = $data->sigform_first_middle . " " . $data->sigform_last;

        // name override
        $this->_values['CANDIDATE_NAME']['value'] = $full_sig_name;

        $this->_values['CANDIDATE_PHONE']['value'] = count($matches) ? sprintf('(%03d) %03d-%04d', $matches[1], $matches[2], $matches[3]) : '&nbsp;';
        $this->_values['Z01']['value'] = $data->candidate_zip[0];
        $this->_values['Z02']['value'] = $data->candidate_zip[1];
        $this->_values['Z03']['value'] = $data->candidate_zip[2];
        $this->_values['Z04']['value'] = $data->candidate_zip[3];
        $this->_values['Z05']['value'] = $data->candidate_zip[4];
        $this->_values['SN01']['value'] = $full_sig_name[0];
        $this->_values['SN02']['value'] = $full_sig_name[1];
        $this->_values['SN03']['value'] = $full_sig_name[2];
        $this->_values['SN04']['value'] = $full_sig_name[3];
        $this->_values['SN05']['value'] = $full_sig_name[4];
        $this->_values['SN06']['value'] = $full_sig_name[5];
        $this->_values['SN07']['value'] = $full_sig_name[6];
        $this->_values['SN08']['value'] = $full_sig_name[7];
        $this->_values['SN09']['value'] = $full_sig_name[8];
        $this->_values['SN10']['value'] = $full_sig_name[9];
        $this->_values['SN11']['value'] = $full_sig_name[10];
        $this->_values['SN12']['value'] = $full_sig_name[11];
        $this->_values['SN13']['value'] = $full_sig_name[12];
        $this->_values['SN14']['value'] = $full_sig_name[13];
        $this->_values['SN15']['value'] = $full_sig_name[14];
        $this->_values['SN16']['value'] = $full_sig_name[15];
        $this->_values['SN17']['value'] = $full_sig_name[16];
        $this->_values['SN18']['value'] = $full_sig_name[17];
        $this->_values['SN19']['value'] = $full_sig_name[18];
        $this->_values['SN20']['value'] = $full_sig_name[19];
        $this->_values['SN21']['value'] = $full_sig_name[20];
        $this->_values['SN22']['value'] = $full_sig_name[21];
        $this->_values['SN23']['value'] = $full_sig_name[22];
        $this->_values['SN24']['value'] = $full_sig_name[23];
        $this->_values['SN25']['value'] = $full_sig_name[24];
        $this->_values['SN26']['value'] = $full_sig_name[25];
        $this->_values['SN27']['value'] = $full_sig_name[26];
        $this->_values['SN28']['value'] = $full_sig_name[27];
        $this->_values['SN29']['value'] = $full_sig_name[28];
        $this->_values['SN30']['value'] = $full_sig_name[29];
        $this->_values['SN31']['value'] = $full_sig_name[30];
        $this->_values['SN32']['value'] = $full_sig_name[31];
        $this->_values['SN33']['value'] = $full_sig_name[32];
        $this->_values['SN34']['value'] = $full_sig_name[33];
        $this->_values['SN35']['value'] = $full_sig_name[34];
        $this->_values['FM01']['value'] = $data->sigform_first_middle[0];
        $this->_values['FM02']['value'] = $data->sigform_first_middle[1];
        $this->_values['FM03']['value'] = $data->sigform_first_middle[2];
        $this->_values['FM04']['value'] = $data->sigform_first_middle[3];
        $this->_values['FM05']['value'] = $data->sigform_first_middle[4];
        $this->_values['FM06']['value'] = $data->sigform_first_middle[5];
        $this->_values['FM07']['value'] = $data->sigform_first_middle[6];
        $this->_values['FM08']['value'] = $data->sigform_first_middle[7];
        $this->_values['FM09']['value'] = $data->sigform_first_middle[8];
        $this->_values['FM10']['value'] = $data->sigform_first_middle[9];
        $this->_values['FM11']['value'] = $data->sigform_first_middle[10];
        $this->_values['FM12']['value'] = $data->sigform_first_middle[11];
        $this->_values['FM13']['value'] = $data->sigform_first_middle[12];
        $this->_values['FM14']['value'] = $data->sigform_first_middle[13];
        $this->_values['FM15']['value'] = $data->sigform_first_middle[14];
        $this->_values['L01']['value'] = $data->sigform_last[0];
        $this->_values['L02']['value'] = $data->sigform_last[1];
        $this->_values['L03']['value'] = $data->sigform_last[2];
        $this->_values['L04']['value'] = $data->sigform_last[3];
        $this->_values['L05']['value'] = $data->sigform_last[4];
        $this->_values['L06']['value'] = $data->sigform_last[5];
        $this->_values['L07']['value'] = $data->sigform_last[6];
        $this->_values['L08']['value'] = $data->sigform_last[7];
        $this->_values['L09']['value'] = $data->sigform_last[8];
        $this->_values['L10']['value'] = $data->sigform_last[9];
        $this->_values['L11']['value'] = $data->sigform_last[10];
        $this->_values['L12']['value'] = $data->sigform_last[11];
        $this->_values['L13']['value'] = $data->sigform_last[12];
        $this->_values['L14']['value'] = $data->sigform_last[13];
        $this->_values['L15']['value'] = $data->sigform_last[14];
        $this->_values['SA01']['value'] = $data->sigform_address[0];
        $this->_values['SA02']['value'] = $data->sigform_address[1];
        $this->_values['SA03']['value'] = $data->sigform_address[2];
        $this->_values['SA04']['value'] = $data->sigform_address[3];
        $this->_values['SA05']['value'] = $data->sigform_address[4];
        $this->_values['SA06']['value'] = $data->sigform_address[5];
        $this->_values['SA07']['value'] = $data->sigform_address[6];
        $this->_values['SA08']['value'] = $data->sigform_address[7];
        $this->_values['SA09']['value'] = $data->sigform_address[8];
        $this->_values['SA10']['value'] = $data->sigform_address[9];
        $this->_values['SA11']['value'] = $data->sigform_address[10];
        $this->_values['SA12']['value'] = $data->sigform_address[11];
        $this->_values['SA13']['value'] = $data->sigform_address[12];
        $this->_values['SA14']['value'] = $data->sigform_address[13];
        $this->_values['SA15']['value'] = $data->sigform_address[14];
        $this->_values['SA16']['value'] = $data->sigform_address[15];
        $this->_values['SA17']['value'] = $data->sigform_address[16];
        $this->_values['SA18']['value'] = $data->sigform_address[17];
        $this->_values['SA19']['value'] = $data->sigform_address[18];
        $this->_values['SA20']['value'] = $data->sigform_address[19];
        $this->_values['SA21']['value'] = $data->sigform_address[20];
        $this->_values['SA22']['value'] = $data->sigform_address[21];
        $this->_values['SA23']['value'] = $data->sigform_address[22];
        $this->_values['SA24']['value'] = $data->sigform_address[23];
        $this->_values['SA25']['value'] = $data->sigform_address[24];
        $this->_values['SA26']['value'] = $data->sigform_address[25];
        $this->_values['SA27']['value'] = $data->sigform_address[26];
        $this->_values['SA28']['value'] = $data->sigform_address[27];
        $this->_values['SA29']['value'] = $data->sigform_address[28];
        $this->_values['SA30']['value'] = $data->sigform_address[29];
        $this->_values['SA31']['value'] = $data->sigform_address[30];
        $this->_values['SA32']['value'] = $data->sigform_address[31];
        $this->_values['SA33']['value'] = $data->sigform_address[32];
        $this->_values['SA34']['value'] = $data->sigform_address[33];
        $this->_values['SA35']['value'] = $data->sigform_address[34];
        $this->_values['N01']['value'] = $data->candidate_name[0];
        $this->_values['N02']['value'] = $data->candidate_name[1];
        $this->_values['N03']['value'] = $data->candidate_name[2];
        $this->_values['N04']['value'] = $data->candidate_name[3];
        $this->_values['N05']['value'] = $data->candidate_name[4];
        $this->_values['N06']['value'] = $data->candidate_name[5];
        $this->_values['N07']['value'] = $data->candidate_name[6];
        $this->_values['N08']['value'] = $data->candidate_name[7];
        $this->_values['N09']['value'] = $data->candidate_name[8];
        $this->_values['N10']['value'] = $data->candidate_name[9];
        $this->_values['N11']['value'] = $data->candidate_name[10];
        $this->_values['N12']['value'] = $data->candidate_name[11];
        $this->_values['N13']['value'] = $data->candidate_name[12];
        $this->_values['N14']['value'] = $data->candidate_name[13];
        $this->_values['N15']['value'] = $data->candidate_name[14];
        $this->_values['N16']['value'] = $data->candidate_name[15];
        $this->_values['N17']['value'] = $data->candidate_name[16];
        $this->_values['N18']['value'] = $data->candidate_name[17];
        $this->_values['N19']['value'] = $data->candidate_name[18];
        $this->_values['N20']['value'] = $data->candidate_name[19];
        $this->_values['N21']['value'] = $data->candidate_name[20];
        $this->_values['N22']['value'] = $data->candidate_name[21];
        $this->_values['N23']['value'] = $data->candidate_name[22];
        $this->_values['N24']['value'] = $data->candidate_name[23];
        $this->_values['N25']['value'] = $data->candidate_name[24];
        $this->_values['N26']['value'] = $data->candidate_name[25];
        $this->_values['N27']['value'] = $data->candidate_name[26];
        $this->_values['N28']['value'] = $data->candidate_name[27];
        $this->_values['N29']['value'] = $data->candidate_name[28];
        $this->_values['N30']['value'] = $data->candidate_name[29];
        $this->_values['N31']['value'] = $data->candidate_name[30];
        $this->_values['N32']['value'] = $data->candidate_name[31];
        $this->_values['N33']['value'] = $data->candidate_name[32];
        $this->_values['N34']['value'] = $data->candidate_name[33];
        $this->_values['N35']['value'] = $data->candidate_name[34];
        $this->_values['A01']['value'] = $data->sigform_address[0];
        $this->_values['A02']['value'] = $data->sigform_address[1];
        $this->_values['A03']['value'] = $data->sigform_address[2];
        $this->_values['A04']['value'] = $data->sigform_address[3];
        $this->_values['A05']['value'] = $data->sigform_address[4];
        $this->_values['A06']['value'] = $data->sigform_address[5];
        $this->_values['A07']['value'] = $data->sigform_address[6];
        $this->_values['A08']['value'] = $data->sigform_address[7];
        $this->_values['A09']['value'] = $data->sigform_address[8];
        $this->_values['A10']['value'] = $data->sigform_address[9];
        $this->_values['A11']['value'] = $data->sigform_address[10];
        $this->_values['A12']['value'] = $data->sigform_address[11];
        $this->_values['A13']['value'] = $data->sigform_address[12];
        $this->_values['A14']['value'] = $data->sigform_address[13];
        $this->_values['A15']['value'] = $data->sigform_address[14];
        $this->_values['A16']['value'] = $data->sigform_address[15];
        $this->_values['A17']['value'] = $data->sigform_address[16];
        $this->_values['A18']['value'] = $data->sigform_address[17];
        $this->_values['A19']['value'] = $data->sigform_address[18];
        $this->_values['A20']['value'] = $data->sigform_address[19];
        $this->_values['A21']['value'] = $data->sigform_address[20];
        $this->_values['A22']['value'] = $data->sigform_address[21];
        $this->_values['A23']['value'] = $data->sigform_address[22];
        $this->_values['A24']['value'] = $data->sigform_address[23];
        $this->_values['A25']['value'] = $data->sigform_address[24];
        $this->_values['A26']['value'] = $data->sigform_address[25];
        $this->_values['A27']['value'] = $data->sigform_address[26];
        $this->_values['A28']['value'] = $data->sigform_address[27];
        $this->_values['A29']['value'] = $data->sigform_address[28];
        $this->_values['A30']['value'] = $data->sigform_address[29];
        $this->_values['A31']['value'] = $data->sigform_address[30];
        $this->_values['A32']['value'] = $data->sigform_address[31];
        $this->_values['A33']['value'] = $data->sigform_address[32];
        $this->_values['A34']['value'] = $data->sigform_address[33];
        $this->_values['A35']['value'] = $data->sigform_address[34];
        $this->_values['CO01']['value'] = $data->candidate_occupation[0];
        $this->_values['CO02']['value'] = $data->candidate_occupation[1];
        $this->_values['CO03']['value'] = $data->candidate_occupation[2];
        $this->_values['CO04']['value'] = $data->candidate_occupation[3];
        $this->_values['CO05']['value'] = $data->candidate_occupation[4];
        $this->_values['CO06']['value'] = $data->candidate_occupation[5];
        $this->_values['CO07']['value'] = $data->candidate_occupation[6];
        $this->_values['CO08']['value'] = $data->candidate_occupation[7];
        $this->_values['CO09']['value'] = $data->candidate_occupation[8];
        $this->_values['CO10']['value'] = $data->candidate_occupation[9];
        $this->_values['CO11']['value'] = $data->candidate_occupation[10];
        $this->_values['CO12']['value'] = $data->candidate_occupation[11];
        $this->_values['CO13']['value'] = $data->candidate_occupation[12];
        $this->_values['CO14']['value'] = $data->candidate_occupation[13];
        $this->_values['CO15']['value'] = $data->candidate_occupation[14];
        $this->_values['CO16']['value'] = $data->candidate_occupation[15];
        $this->_values['CO17']['value'] = $data->candidate_occupation[16];
        $this->_values['CO18']['value'] = $data->candidate_occupation[17];
        $this->_values['CO19']['value'] = $data->candidate_occupation[18];
        $this->_values['CO20']['value'] = $data->candidate_occupation[19];
        $this->_values['CO21']['value'] = $data->candidate_occupation[20];
        $this->_values['CO22']['value'] = $data->candidate_occupation[21];
        $this->_values['CO23']['value'] = $data->candidate_occupation[22];
        $this->_values['CO24']['value'] = $data->candidate_occupation[23];
        $this->_values['CO25']['value'] = $data->candidate_occupation[24];
        $this->_values['CO26']['value'] = $data->candidate_occupation[25];
        $this->_values['CO27']['value'] = $data->candidate_occupation[26];
        $this->_values['CO28']['value'] = $data->candidate_occupation[27];
        $this->_values['CO29']['value'] = $data->candidate_occupation[28];
        $this->_values['CO30']['value'] = $data->candidate_occupation[29];
        $this->_values['CO31']['value'] = $data->candidate_occupation[30];
        $this->_values['CO32']['value'] = $data->candidate_occupation[31];
        $this->_values['CO33']['value'] = $data->candidate_occupation[32];
        $this->_values['CO34']['value'] = $data->candidate_occupation[33];
        $this->_values['CO35']['value'] = $data->candidate_occupation[34];
        $this->_values['C01']['value'] = "PHILADELPHIA"[0];
        $this->_values['C02']['value'] = "PHILADELPHIA"[1];
        $this->_values['C03']['value'] = "PHILADELPHIA"[2];
        $this->_values['C04']['value'] = "PHILADELPHIA"[3];
        $this->_values['C05']['value'] = "PHILADELPHIA"[4];
        $this->_values['C06']['value'] = "PHILADELPHIA"[5];
        $this->_values['C07']['value'] = "PHILADELPHIA"[6];
        $this->_values['C08']['value'] = "PHILADELPHIA"[7];
        $this->_values['C09']['value'] = "PHILADELPHIA"[8];
        $this->_values['C10']['value'] = "PHILADELPHIA"[9];
        $this->_values['C11']['value'] = "PHILADELPHIA"[10];
        $this->_values['C12']['value'] = "PHILADELPHIA"[11];
        $this->_values['C13']['value'] = "PHILADELPHIA"[12];
        $this->_values['C14']['value'] = "PHILADELPHIA"[13];
        $this->_values['C15']['value'] = "PHILADELPHIA"[14];
        $this->_values['C16']['value'] = "PHILADELPHIA"[15];
        $this->_values['C17']['value'] = "PHILADELPHIA"[16];
        $this->_values['C18']['value'] = "PHILADELPHIA"[17];
        $this->_values['C19']['value'] = "PHILADELPHIA"[18];
        $this->_values['C20']['value'] = "PHILADELPHIA"[19];
        $this->_values['C21']['value'] = "PHILADELPHIA"[20];
        $this->_values['C22']['value'] = "PHILADELPHIA"[21];
        $this->_values['C23']['value'] = "PHILADELPHIA"[22];
        $this->_values['C24']['value'] = "PHILADELPHIA"[23];
        $this->_values['C25']['value'] = "PHILADELPHIA"[24];
        $this->_values['S01']['value'] = "PA"[0];
        $this->_values['S02']['value'] = "PA"[1];
        $this->_values['W01']['value'] = sprintf('%02d', $data->candidate_ward)[0];
        $this->_values['W02']['value'] = sprintf('%02d', $data->candidate_ward)[1];
        $this->_values['D01']['value'] = sprintf('%02d', $data->candidate_division)[0];
        $this->_values['D02']['value'] = sprintf('%02d', $data->candidate_division)[1];
        $this->_values['I01']['value'] = "";
        $this->_values['I02']['value'] = "";
        $this->_values['I03']['value'] = "";
        $this->_values['I04']['value'] = "";
        $this->_values['I05']['value'] = "";
        $this->_values['I06']['value'] = "";
        $this->_values['I07']['value'] = "";
        $this->_values['I08']['value'] = "";
        $this->_values['I09']['value'] = "";
        $this->_values['I10']['value'] = "";
        $this->_values['I11']['value'] = "";
        $this->_values['I12']['value'] = "";
        $this->_values['I13']['value'] = "";
        $this->_values['I14']['value'] = "";
        $this->_values['I15']['value'] = "";
        $this->_values['I16']['value'] = "";
        $this->_values['I17']['value'] = "";
        $this->_values['I18']['value'] = "";
        $this->_values['I19']['value'] = "";
        $this->_values['I20']['value'] = "";
        if ($data->candidate_district) {
            $this->_values['I01']['value'] = sprintf('%02d', $data->candidate_district)[0];
            $this->_values['I02']['value'] = sprintf('%02d', $data->candidate_district)[1];
        }
        $this->_values['P01']['value'] = $data->candidate_party[0];
        $this->_values['P02']['value'] = $data->candidate_party[1];
        $this->_values['P03']['value'] = $data->candidate_party[2];
        $this->_values['P04']['value'] = $data->candidate_party[3];
        $this->_values['P05']['value'] = $data->candidate_party[4];
        $this->_values['P06']['value'] = $data->candidate_party[5];
        $this->_values['P07']['value'] = $data->candidate_party[6];
        $this->_values['P08']['value'] = $data->candidate_party[7];
        $this->_values['P09']['value'] = $data->candidate_party[8];
        $this->_values['P10']['value'] = $data->candidate_party[9];
        $this->_values['P11']['value'] = $data->candidate_party[10];
        $this->_values['P12']['value'] = $data->candidate_party[11];
        $this->_values['P13']['value'] = $data->candidate_party[12];
        $this->_values['P14']['value'] = $data->candidate_party[13];
        $this->_values['P15']['value'] = $data->candidate_party[14];
        $this->_values['P16']['value'] = $data->candidate_party[15];
        $this->_values['P17']['value'] = $data->candidate_party[16];
        $this->_values['P18']['value'] = $data->candidate_party[17];
        $this->_values['P19']['value'] = $data->candidate_party[18];
        $this->_values['P20']['value'] = $data->candidate_party[19];
        $this->_values['P21']['value'] = $data->candidate_party[20];
        $this->_values['P22']['value'] = $data->candidate_party[21];
        $this->_values['P23']['value'] = $data->candidate_party[22];
        $this->_values['P24']['value'] = $data->candidate_party[23];
        $this->_values['P25']['value'] = $data->candidate_party[24];

        return $this->_values;
    }

    /**
     * Gets the css.
     *
     * @return @string The css
     */
    public function getCss()
    {
        return file_get_contents(JPATH_COMPONENT_SITE.'/assets/css/'.$this->_css);
    }

    /**
     * Gets the template.
     *
     * @return @string The template
     */
    public function getTemplate()
    {
        return file_get_contents(JPATH_COMPONENT_SITE.'/assets/html/'.$this->_template);
    }

    /**
     * Gets the html.
     *
     * @return @string The html
     */
    public function getHtml()
    {
        $template = $this->getTemplate();
        $values = $this->getValues();
        foreach ($values as $key => $value) {
            if (trim($value['value']) == '') $value['value'] = '&nbsp;';
            if ($value['case'] == 'u' && $value['value'] != '&nbsp;') {
                $temp = strtoupper($value['value']);
            } else {
                $temp = $value['value'];
            }
            $template = str_replace('{'.$key.'}', str_replace(' ', '&nbsp;', trim($temp)), $template);
        }

        return $template;
    }

    /**
     * Set the Input identifier.
     *
     * @param    int item identifier
     * @param mixed $index
     */
    public function setId($index)
    {
        // Set id and wipe data
        $this->_id = $index;
        $this->_data = null;
    }

    public function _buildQuery()
    {
        $query = ' SELECT `n`.*
                    , `o`.`name` AS `office_name`
                    , `na`.`signatures`
                    , `nd`.`signing_start`
                    , `nd`.`signing_stop`
                    , `nd`.`election_date`
                    , `nd`.`election_type`
                   FROM `#__pv_papers` AS `n`
                    , `#__pv_paper_displays` AS `nd`
                    , `#__pv_paper_data` AS `na`
                    , `#__pv_offices` AS `o` ';
        $where = ' WHERE ';
        $where .= ' `n`.`display_id`=`nd`.`id` AND ';
        $where .= ' `nd`.`data_id`=`na`.`id` AND ';
        $where .= ' `na`.`office_id`=`o`.`id` AND ';
        $where .= ' `n`.`id`='.$this->_db->quote($this->_id);

        return $query.$where;
    }

    /**
     * Get an item.
     *
     * @return object with data
     */
    public function &getData()
    {
        // Load the data
        if (empty($this->_data)) {
            $query = $this->_buildQuery();
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();

            // now that we have a result, populate the template related properties
            $this->_css = $this->_data->p_template_css;
            $this->_template = $this->_data->p_template_html;
        }

        return $this->_data;
    }
}
