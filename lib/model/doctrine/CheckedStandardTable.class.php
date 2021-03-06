<?php

/**
 * CheckedStandardTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CheckedStandardTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return CheckedStandardTable The table instance
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('CheckedStandard');
  }

  /**
   * @param $checkListId
   * @param bool $criterionToExclude
   * @return mixed
   */
  public static function sumWeightByCheckList($checkListId, $criterionToExclude = false)
  {
    $query = Doctrine_Query::create()->select('c.id, SUM(c.weight) as total')->from('CheckedStandard c')->where('c.check_list_id = ?',
      $checkListId);

    if ($criterionToExclude)
    {
      $query->andWhereNotIn('c.id', [$criterionToExclude]);
    }

    return $query->fetchOne()->getTotal();
  }

  /**
   * @param $checkListId
   * @param int $hydrationMode
   * @return Doctrine_Collection
   * @throws Doctrine_Query_Exception
   */
  public function getCriteriasByCheckList($checkListId, $hydrationMode = 2)
  {
    $query = Doctrine_Query::create()
      ->from('CheckedStandard c')
      ->where('c.check_list = ?', $checkListId);

    return $query->execute(null, $hydrationMode);
  }
}
