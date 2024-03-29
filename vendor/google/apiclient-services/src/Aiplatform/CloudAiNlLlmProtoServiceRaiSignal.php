<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Aiplatform;

class CloudAiNlLlmProtoServiceRaiSignal extends \Google\Collection
{
  protected $collection_key = 'influentialTerms';
  /**
   * @var string
   */
  public $confidence;
  /**
   * @var bool
   */
  public $flagged;
  protected $influentialTermsType = CloudAiNlLlmProtoServiceRaiSignalInfluentialTerm::class;
  protected $influentialTermsDataType = 'array';
  /**
   * @var string
   */
  public $raiCategory;
  /**
   * @var float
   */
  public $score;

  /**
   * @param string
   */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /**
   * @return string
   */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /**
   * @param bool
   */
  public function setFlagged($flagged)
  {
    $this->flagged = $flagged;
  }
  /**
   * @return bool
   */
  public function getFlagged()
  {
    return $this->flagged;
  }
  /**
   * @param CloudAiNlLlmProtoServiceRaiSignalInfluentialTerm[]
   */
  public function setInfluentialTerms($influentialTerms)
  {
    $this->influentialTerms = $influentialTerms;
  }
  /**
   * @return CloudAiNlLlmProtoServiceRaiSignalInfluentialTerm[]
   */
  public function getInfluentialTerms()
  {
    return $this->influentialTerms;
  }
  /**
   * @param string
   */
  public function setRaiCategory($raiCategory)
  {
    $this->raiCategory = $raiCategory;
  }
  /**
   * @return string
   */
  public function getRaiCategory()
  {
    return $this->raiCategory;
  }
  /**
   * @param float
   */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /**
   * @return float
   */
  public function getScore()
  {
    return $this->score;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiNlLlmProtoServiceRaiSignal::class, 'Google_Service_Aiplatform_CloudAiNlLlmProtoServiceRaiSignal');
