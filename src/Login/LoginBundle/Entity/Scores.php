<?php

namespace Login\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scores
 */
class Scores
{
    /**
     * @var string
     */
    private $playerName;

    /**
     * @var string
     */
    private $scores;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $userId;


    /**
     * Set playerName
     *
     * @param string $playerName
     * @return Scores
     */
    public function setPlayerName($playerName)
    {
        $this->playerName = $playerName;

        return $this;
    }

    /**
     * Get playerName
     *
     * @return string 
     */
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * Set scores
     *
     * @param string $scores
     * @return Scores
     */
    public function setScores($scores)
    {
        $this->scores = $scores;

        return $this;
    }

    /**
     * Get scores
     *
     * @return string 
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Scores
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * @var string
     */
    private $player1;

    /**
     * @var string
     */
    private $player2;

    /**
     * @var string
     */
    private $player3;

    /**
     * @var string
     */
    private $player4;

    /**
     * @var string
     */
    private $player5;

    /**
     * @var string
     */
    private $player6;

    /**
     * @var string
     */
    private $player7;

    /**
     * @var string
     */
    private $player8;

    /**
     * @var string
     */
    private $player9;

    /**
     * @var string
     */
    private $player10;

    /**
     * @var string
     */
    private $player11;


    /**
     * Set player1
     *
     * @param string $player1
     * @return Scores
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;

        return $this;
    }

    /**
     * Get player1
     *
     * @return string 
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * Set player2
     *
     * @param string $player2
     * @return Scores
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;

        return $this;
    }

    /**
     * Get player2
     *
     * @return string 
     */
    public function getPlayer2()
    {
        return $this->player2;
    }

    /**
     * Set player3
     *
     * @param string $player3
     * @return Scores
     */
    public function setPlayer3($player3)
    {
        $this->player3 = $player3;

        return $this;
    }

    /**
     * Get player3
     *
     * @return string 
     */
    public function getPlayer3()
    {
        return $this->player3;
    }

    /**
     * Set player4
     *
     * @param string $player4
     * @return Scores
     */
    public function setPlayer4($player4)
    {
        $this->player4 = $player4;

        return $this;
    }

    /**
     * Get player4
     *
     * @return string 
     */
    public function getPlayer4()
    {
        return $this->player4;
    }

    /**
     * Set player5
     *
     * @param string $player5
     * @return Scores
     */
    public function setPlayer5($player5)
    {
        $this->player5 = $player5;

        return $this;
    }

    /**
     * Get player5
     *
     * @return string 
     */
    public function getPlayer5()
    {
        return $this->player5;
    }

    /**
     * Set player6
     *
     * @param string $player6
     * @return Scores
     */
    public function setPlayer6($player6)
    {
        $this->player6 = $player6;

        return $this;
    }

    /**
     * Get player6
     *
     * @return string 
     */
    public function getPlayer6()
    {
        return $this->player6;
    }

    /**
     * Set player7
     *
     * @param string $player7
     * @return Scores
     */
    public function setPlayer7($player7)
    {
        $this->player7 = $player7;

        return $this;
    }

    /**
     * Get player7
     *
     * @return string 
     */
    public function getPlayer7()
    {
        return $this->player7;
    }

    /**
     * Set player8
     *
     * @param string $player8
     * @return Scores
     */
    public function setPlayer8($player8)
    {
        $this->player8 = $player8;

        return $this;
    }

    /**
     * Get player8
     *
     * @return string 
     */
    public function getPlayer8()
    {
        return $this->player8;
    }

    /**
     * Set player9
     *
     * @param string $player9
     * @return Scores
     */
    public function setPlayer9($player9)
    {
        $this->player9 = $player9;

        return $this;
    }

    /**
     * Get player9
     *
     * @return string 
     */
    public function getPlayer9()
    {
        return $this->player9;
    }

    /**
     * Set player10
     *
     * @param string $player10
     * @return Scores
     */
    public function setPlayer10($player10)
    {
        $this->player10 = $player10;

        return $this;
    }

    /**
     * Get player10
     *
     * @return string 
     */
    public function getPlayer10()
    {
        return $this->player10;
    }

    /**
     * Set player11
     *
     * @param string $player11
     * @return Scores
     */
    public function setPlayer11($player11)
    {
        $this->player11 = $player11;

        return $this;
    }

    /**
     * Get player11
     *
     * @return string 
     */
    public function getPlayer11()
    {
        return $this->player11;
    }
}
