using System;
using CKUT.Core.Models.Sample;

namespace CKUT.Core.Services.Sample
{
    public class RoundUpCalculator : ICalculator
    {
        public decimal Calculate(InputDetail inputDetail)
        {
            return Math.Floor(inputDetail.InputNumber);
        }
    }
}