<?php
/*
 * This file is part of Part-DB (https://github.com/Part-DB/Part-DB-symfony).
 *
 *  Copyright (C) 2019 - 2022 Jan Böhmer (https://github.com/jbtronics)
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published
 *  by the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace App\Form\Filters\Constraints;

class ParameterValueConstraintType extends NumberConstraintType
{
    protected const CHOICES =  [
        '' => '',
        'filter.parameter_value_constraint.operator.=' => '=',
        'filter.parameter_value_constraint.operator.!=' => '!=',
        'filter.parameter_value_constraint.operator.<' => '<',
        'filter.parameter_value_constraint.operator.>' => '>',
        'filter.parameter_value_constraint.operator.<=' => '<=',
        'filter.parameter_value_constraint.operator.>=' => '>=',
        'filter.parameter_value_constraint.operator.BETWEEN' => 'BETWEEN',

        //Extensions by ParameterValueConstraint
        'filter.parameter_value_constraint.operator.IN_RANGE' => 'IN_RANGE',
        'filter.parameter_value_constraint.operator.NOT_IN_RANGE' => 'NOT_IN_RANGE',
        'filter.parameter_value_constraint.operator.GREATER_THAN_RANGE' => 'GREATER_THAN_RANGE',
        'filter.parameter_value_constraint.operator.GREATER_EQUAL_RANGE' => 'GREATER_EQUAL_RANGE',
        'filter.parameter_value_constraint.operator.LESS_THAN_RANGE' => 'LESS_THAN_RANGE',
        'filter.parameter_value_constraint.operator.LESS_EQUAL_RANGE' => 'LESS_EQUAL_RANGE',

        'filter.parameter_value_constraint.operator.RANGE_IN_RANGE' => 'RANGE_IN_RANGE',
        'filter.parameter_value_constraint.operator.RANGE_INTERSECT_RANGE' => 'RANGE_INTERSECT_RANGE'
    ];

    public function getParent(): string
    {
        return NumberConstraintType::class;
    }
}