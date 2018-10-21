<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018-10-20
 * Time: 15:38
 */

class cl_year implements JsonSerializable
{
  private $m_idyea;
  private $m_decade;
  private $m_year;

  /**
   * @param mixed $m_idyea
   */
  public function set_Idyea($m_idyea): void
  {
    $this->m_idyea = $m_idyea;
  }

  /**
   * @return mixed
   */
  public function get_Idyea()
  {
    return $this->m_idyea;
  }

  /**
   * @param mixed $m_decade
   */
  public function set_Decade($m_decade): void
  {
    $this->m_decade = $m_decade;
  }

  /**
   * @return mixed
   */
  public function get_Decade()
  {
    return $this->m_decade;
  }

  /**
   * @param mixed $m_year
   */
  public function set_Year($m_year): void
  {
    $this->m_year = $m_year;
  }

  /**
   * @return mixed
   */
  public function get_Year()
  {
    return $this->m_year;
  }

  public function jsonSerialize()
  {
    return [
      'idxValue' => $this->get_Idyea(),
      'decade' => $this->get_Decade(),
      'year' => $this->get_Year(),
    ];
  }
}
