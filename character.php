<?php

/**
 * Created by PhpStorm.
 * User: marcneisser
 * Date: 12/17/16
 * Time: 5:56 PM
 *
 * This class should contain all stat values and character calculations that are important to comparisons
 * with the dm during gameplay
 */
class character
{
    public $isNPC; //boolean that determines if this character is player controlled
    //base character information
    public $characterName;
    public $characterLevel;
    //hit points
    protected $currentHitPoints;
    protected $maximumHitPoints;
    //character information. data types are int (for ID) and string for everything else
    public $characterClassID;
    public $backgroundID;
    public $faction;
    public $raceID;
    public $alignment;//not sure is this will need to be custom object data type
    //experience points
    public $experienceCurrent;
    public $experienceNeeded;
    //core stats
    public $strength;
    public $dexterity;
    public $constitution;
    public $intelligence;
    public $wisdom;
    public $charisma;
    //modifiers & special
    public $proficiencyBonus;
    public $inspiration;
    //saving throw proficiency. boolean value
    public $isStrength;
    public $isDexterity;
    public $isConstitution;
    public $isIntelligence;
    public $isWisdom;
    public $isCharisma;
    //skill proficiencies. boolean value
    public $acrobatics;
    public $animalHandling;
    public $arcana;
    public $athletics;
    public $deception;
    public $history;
    public $insight;
    public $intimidation;
    public $investigation;
    public $medicine;
    public $nature;
    public $perception;
    public $performance;
    public $persuasion;
    public $religion;
    public $sleightOfHand;
    public $stealth;
    public $survival;
    //might need to add resistances

    protected $dbLink;

    /**
     * character constructor used for new character creation
     * @param $characterName
     * @param $characterLevel
     * @param $characterClassID
     * @param $backgroundID
     * @param $faction
     * @param $raceID
     * @param $alignment
     * @param $baseStrength
     * @param $baseDexterity
     * @param $baseConstitution
     * @param $baseIntelligence
     * @param $baseWisdom
     * @param $baseCharisma
     * @param $pAcrobatics
     * @param $pAnimalHandling
     * @param $pArcana
     * @param $pAthletics
     * @param $pDeception
     * @param $pHistory
     * @param $pInsight
     * @param $pIntimidation
     * @param $pInvestigation
     * @param $pMedicine
     * @param $pNature
     * @param $pPerception
     * @param $pPerformance
     * @param $pPersuasion
     * @param $pReligion
     * @param $pSleightOfHand
     * @param $pStealth
     * @param $pSurvival
     */
    public function __construct($characterName, $characterLevel,
                                $characterClassID, $backgroundID, $faction, $raceID, $alignment,
                                $baseStrength, $baseDexterity, $baseConstitution, $baseIntelligence, $baseWisdom, $baseCharisma,
                                $pAcrobatics, $pAnimalHandling, $pArcana, $pAthletics, $pDeception, $pHistory, $pInsight,
                                $pIntimidation, $pInvestigation, $pMedicine, $pNature, $pPerception, $pPerformance, $pPersuasion,
                                $pReligion, $pSleightOfHand, $pStealth, $pSurvival)
    {
        $this->dbLink=new dbConnection();

        $sql= "INSERT INTO"
        //gotta make sure the above is correct. not sure what to do with the port. I DONT THINK THE ABOVE IS RIGHT

    }

    /**
     * character constructor used for loading in an existing character that is not in a game already
     */
    public function __construct(){

    }

    /**
     * character constructor for loading in a character that is already in a game.
     */
    public function __construct(){

    }

    /*
     * TODO:have a seperate extension class that is only available to the dm that will provide set/get functions
     * so there will be no chance that players have access to them
     */

    /**
     * @return mixed
     */
    public function getIsNPC()
    {
        return $this->isNPC;
    }

    /**
     * @param mixed $isNPC
     */
    public function setIsNPC($isNPC)
    {
        $this->isNPC = $isNPC;
    }

    /**
     * @return mixed
     */
    public function getCharacterName()
    {
        return $this->characterName;
    }

    /**
     * @param mixed $characterName
     */
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;
    }

    /**
     * @return mixed
     */
    public function getCharacterLevel()
    {
        return $this->characterLevel;
    }

    /**
     * @param mixed $characterLevel
     */
    public function setCharacterLevel($characterLevel)
    {
        $this->characterLevel = $characterLevel;
    }

    /**
     * @return mixed
     */
    public function getCharacterClassID()
    {
        return $this->characterClassID;
    }

    /**
     * @param mixed $characterClassID
     */
    public function setCharacterClassID($characterClassID)
    {
        $this->characterClassID = $characterClassID;
    }

    /**
     * @return mixed
     */
    public function getBackgroundID()
    {
        return $this->backgroundID;
    }

    /**
     * @param mixed $backgroundID
     */
    public function setBackgroundID($backgroundID)
    {
        $this->backgroundID = $backgroundID;
    }

    /**
     * @return mixed
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * @param mixed $faction
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;
    }

    /**
     * @return mixed
     */
    public function getRaceID()
    {
        return $this->raceID;
    }

    /**
     * @param mixed $raceID
     */
    public function setRaceID($raceID)
    {
        $this->raceID = $raceID;
    }

    /**
     * @return mixed
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * @param mixed $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

    /**
     * @return mixed
     */
    public function getExperienceCurrent()
    {
        return $this->experienceCurrent;
    }

    /**
     * @param mixed $experienceCurrent
     */
    public function setExperienceCurrent($experienceCurrent)
    {
        $this->experienceCurrent = $experienceCurrent;
    }

    /**
     * @return mixed
     */
    public function getExperienceNeeded()
    {
        return $this->experienceNeeded;
    }

    /**
     * @param mixed $experienceNeeded
     */
    public function setExperienceNeeded($experienceNeeded)
    {
        $this->experienceNeeded = $experienceNeeded;
    }

    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param mixed $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @return mixed
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * @param mixed $dexterity
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;
    }

    /**
     * @return mixed
     */
    public function getConstitution()
    {
        return $this->constitution;
    }

    /**
     * @param mixed $constitution
     */
    public function setConstitution($constitution)
    {
        $this->constitution = $constitution;
    }

    /**
     * @return mixed
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * @param mixed $intelligence
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return mixed
     */
    public function getWisdom()
    {
        return $this->wisdom;
    }

    /**
     * @param mixed $wisdom
     */
    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;
    }

    /**
     * @return mixed
     */
    public function getCharisma()
    {
        return $this->charisma;
    }

    /**
     * @param mixed $charisma
     */
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;
    }

    /**
     * @return mixed
     */
    public function getProficiencyBonus()
    {
        return $this->proficiencyBonus;
    }

    /**
     * @param mixed $proficiencyBonus
     */
    public function setProficiencyBonus($proficiencyBonus)
    {
        $this->proficiencyBonus = $proficiencyBonus;
    }

    /**
     * @return mixed
     */
    public function getInspiration()
    {
        return $this->inspiration;
    }

    /**
     * @param mixed $inspiration
     */
    public function setInspiration($inspiration)
    {
        $this->inspiration = $inspiration;
    }

    /**
     * @return mixed
     */
    public function getIsStrength()
    {
        return $this->isStrength;
    }

    /**
     * @param mixed $isStrength
     */
    public function setIsStrength($isStrength)
    {
        $this->isStrength = $isStrength;
    }

    /**
     * @return mixed
     */
    public function getIsDexterity()
    {
        return $this->isDexterity;
    }

    /**
     * @param mixed $isDexterity
     */
    public function setIsDexterity($isDexterity)
    {
        $this->isDexterity = $isDexterity;
    }

    /**
     * @return mixed
     */
    public function getIsConstitution()
    {
        return $this->isConstitution;
    }

    /**
     * @param mixed $isConstitution
     */
    public function setIsConstitution($isConstitution)
    {
        $this->isConstitution = $isConstitution;
    }

    /**
     * @return mixed
     */
    public function getIsIntelligence()
    {
        return $this->isIntelligence;
    }

    /**
     * @param mixed $isIntelligence
     */
    public function setIsIntelligence($isIntelligence)
    {
        $this->isIntelligence = $isIntelligence;
    }

    /**
     * @return mixed
     */
    public function getIsWisdom()
    {
        return $this->isWisdom;
    }

    /**
     * @param mixed $isWisdom
     */
    public function setIsWisdom($isWisdom)
    {
        $this->isWisdom = $isWisdom;
    }

    /**
     * @return mixed
     */
    public function getIsCharisma()
    {
        return $this->isCharisma;
    }

    /**
     * @param mixed $isCharisma
     */
    public function setIsCharisma($isCharisma)
    {
        $this->isCharisma = $isCharisma;
    }

    /**
     * @return mixed
     */
    public function getAcrobatics()
    {
        return $this->acrobatics;
    }

    /**
     * @param mixed $acrobatics
     */
    public function setAcrobatics($acrobatics)
    {
        $this->acrobatics = $acrobatics;
    }

    /**
     * @return mixed
     */
    public function getAnimalHandling()
    {
        return $this->animalHandling;
    }

    /**
     * @param mixed $animalHandling
     */
    public function setAnimalHandling($animalHandling)
    {
        $this->animalHandling = $animalHandling;
    }

    /**
     * @return mixed
     */
    public function getArcana()
    {
        return $this->arcana;
    }

    /**
     * @param mixed $arcana
     */
    public function setArcana($arcana)
    {
        $this->arcana = $arcana;
    }

    /**
     * @return mixed
     */
    public function getAthletics()
    {
        return $this->athletics;
    }

    /**
     * @param mixed $athletics
     */
    public function setAthletics($athletics)
    {
        $this->athletics = $athletics;
    }

    /**
     * @return mixed
     */
    public function getDeception()
    {
        return $this->deception;
    }

    /**
     * @param mixed $deception
     */
    public function setDeception($deception)
    {
        $this->deception = $deception;
    }

    /**
     * @return mixed
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @param mixed $history
     */
    public function setHistory($history)
    {
        $this->history = $history;
    }

    /**
     * @return mixed
     */
    public function getInsight()
    {
        return $this->insight;
    }

    /**
     * @param mixed $insight
     */
    public function setInsight($insight)
    {
        $this->insight = $insight;
    }

    /**
     * @return mixed
     */
    public function getIntimidation()
    {
        return $this->intimidation;
    }

    /**
     * @param mixed $intimidation
     */
    public function setIntimidation($intimidation)
    {
        $this->intimidation = $intimidation;
    }

    /**
     * @return mixed
     */
    public function getInvestigation()
    {
        return $this->investigation;
    }

    /**
     * @param mixed $investigation
     */
    public function setInvestigation($investigation)
    {
        $this->investigation = $investigation;
    }

    /**
     * @return mixed
     */
    public function getMedicine()
    {
        return $this->medicine;
    }

    /**
     * @param mixed $medicine
     */
    public function setMedicine($medicine)
    {
        $this->medicine = $medicine;
    }

    /**
     * @return mixed
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * @param mixed $nature
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
    }

    /**
     * @return mixed
     */
    public function getPerception()
    {
        return $this->perception;
    }

    /**
     * @param mixed $perception
     */
    public function setPerception($perception)
    {
        $this->perception = $perception;
    }

    /**
     * @return mixed
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * @param mixed $performance
     */
    public function setPerformance($performance)
    {
        $this->performance = $performance;
    }

    /**
     * @return mixed
     */
    public function getPersuasion()
    {
        return $this->persuasion;
    }

    /**
     * @param mixed $persuasion
     */
    public function setPersuasion($persuasion)
    {
        $this->persuasion = $persuasion;
    }

    /**
     * @return mixed
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * @param mixed $religion
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;
    }

    /**
     * @return mixed
     */
    public function getSleightOfHand()
    {
        return $this->sleightOfHand;
    }

    /**
     * @param mixed $sleightOfHand
     */
    public function setSleightOfHand($sleightOfHand)
    {
        $this->sleightOfHand = $sleightOfHand;
    }

    /**
     * @return mixed
     */
    public function getStealth()
    {
        return $this->stealth;
    }

    /**
     * @param mixed $stealth
     */
    public function setStealth($stealth)
    {
        $this->stealth = $stealth;
    }

    /**
     * @return mixed
     */
    public function getSurvival()
    {
        return $this->survival;
    }

    /**
     * @param mixed $survival
     */
    public function setSurvival($survival)
    {
        $this->survival = $survival;
    }



    /*
     * saving throws and skills will be calculated on the fly
     */

    //this function generates the modifier value for the different stat modifiers
    private function generateModifier($statValue){
        $modifierValue=null;
        switch ($statValue){
            case 1:
                $modifierValue=-5;
                break;
            case 2:
            case 3:
                $modifierValue=-4;
                break;
            case 4:
            case 5:
                $modifierValue=-3;
                break;
            case 6:
            case 7:
                $modifierValue=-2;
                break;
            case 8:
            case 9:
                $modifierValue=-1;
                break;
            case 10:
            case 11:
                $modifierValue=0;
                break;
            case 12:
            case 13:
                $modifierValue=1;
                break;
            case 14:
            case 15:
                $modifierValue=2;
                break;
            case 16:
            case 17:
                $modifierValue=3;
                break;
            case 18:
            case 19:
                $modifierValue=4;
                break;
            case 20:
            case 21:
                $modifierValue=5;
                break;
            case 22:
            case 23:
                $modifierValue=6;
                break;
            case 24:
            case 25:
                $modifierValue=7;
                break;
            case 26:
            case 27:
                $modifierValue=8;
                break;
            case 28:
            case 29:
                $modifierValue=9;
                break;
            case 30:
                $modifierValue=10;
                break;
        }
        return $modifierValue;
    }
    /*
     * the following "get...Modifier" functions return modifier values for each stat of a character.
     * These stats are generally used for saving throws, skill checks, etc...
     *
     */
    protected function getStrengthModifier(){
        $modifierValue=$this->generateModifier($this->strength);
        return $modifierValue;
    }

    protected function getDexterityModifier(){
        $modifierValue=$this->generateModifier($this->dexterity);
        return $modifierValue;
    }

    protected function getConstitutionModifier(){
        $modifierValue=$this->generateModifier($this->constitution);
        return $modifierValue;
    }

    protected function getIntelligenceModifier(){
        $modifierValue=$this->generateModifier($this->intelligence);
        return $modifierValue;
    }

    protected function getWisdomModifier(){
        $modifierValue=$this->generateModifier($this->wisdom);
        return $modifierValue;
    }

    protected function getCharismaModifier(){
        $modifierValue=$this->generateModifier($this->charisma);
        return $modifierValue;
    }
    /*
     * the get...Save functions return values necessary to calculate saves
     */
    protected function getStrengthSave(){
        $modifierValue=$this->getStrengthModifier();
        if($this->isStrength==true){
            $modifierValue += $this->proficiencyBonus;
        }
        return $modifierValue;
    }

    protected function getDexteritySave(){
        $modifierValue=$this->getDexterityModifier();
        if($this->isDexterity==true){
            $modifierValue+=$this->proficiencyBonus;
        }
        return $modifierValue;
    }

    protected function getConstitutionSave(){
        $modifierValue=$this->getConstitutionModifier();
        if($this->isConstitution==true){
            $modifierValue+=$this->proficiencyBonus;
        }
        return $modifierValue;
    }

    protected function getIntelligenceSave(){
        $modifierValue=$this->getIntelligenceModifier();
        if($this->isIntelligence==true){
            $modifierValue+=$this->proficiencyBonus;
        }
        return $modifierValue;
    }

    protected function getWisdomSave(){
        $modifierValue=$this->getWisdomModifier();
        if($this->isWisdom==true){
            $modifierValue+=$this->proficiencyBonus;
        }
        return $modifierValue;
    }

    protected function getCharismaSave(){
        $modifierValue=$this->getCharismaModifier();
        if($this->isCharisma==true){
            $modifierValue+=$this->proficiencyBonus;
        }
        return $modifierValue;
    }
    /*
     * the get...Check functions return values necessary to calculate various skill checks in the game
     * TODO:define check functions
     */
    protected function getAcrobaticsCheck(){
        $checkValue=$this->generateModifier($this->dexterity);
        if($this->acrobatics==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getAnimalHandlingCheck(){
        $checkValue=$this->generateModifier($this->wisdom);
        if($this->animalHandling==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getArcanaCheck(){
        $checkValue=$this->generateModifier($this->intelligence);
        if($this->arcana==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getAthleticsCheck(){
        $checkValue=$this->generateModifier($this->strength);
        if ($this->athletics==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getDeceptionCheck(){
        $checkValue=$this->generateModifier($this->charisma);
        if ($this->deception==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getHistoryCheck(){
        $checkValue=$this->generateModifier($this->intelligence);
        if ($this->history==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getInsightCheck(){
        $checkValue=$this->generateModifier($this->wisdom);
        if ($this->insight==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getIntimidationCheck(){
        $checkValue=$this->generateModifier($this->charisma);
        if ($this->intimidation==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getInvestigationCheck(){
        $checkValue=$this->generateModifier($this->intelligence);
        if ($this->investigation==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getMedicineCheck(){
        $checkValue=$this->generateModifier($this->wisdom);
        if ($this->medicine==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getNatureCheck(){
        $checkValue=$this->generateModifier($this->intelligence);
        if ($this->nature==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getPerceptionCheck(){
        $checkValue=$this->generateModifier($this->wisdom);
        if($this->perception==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getPerformanceCheck(){
        $checkValue=$this->generateModifier($this->charisma);
        if ($this->performance==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getPersuasionCheck(){
        $checkValue=$this->generateModifier($this->charisma);
        if ($this->persuasion==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getReligionCheck(){
        $checkValue=$this->generateModifier($this->intelligence);
        if ($this->religion==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getSleightOfHandCheck(){
        $checkValue=$this->generateModifier($this->dexterity);
        if ($this->sleightOfHand==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getStealthCheck(){
        $checkValue=$this->generateModifier($this->dexterity);
        if ($this->stealth==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }

    protected function getSurvivalCheck(){
        $checkValue=$this->generateModifier($this->wisdom);
        if ($this->survival==true){
            $checkValue+=$this->proficiencyBonus;
        }
        return $checkValue;
    }
    /*
     * TODO: make function that will get the class, race, or background for DB based on ID. All transactions done in
     * real time
     */
}