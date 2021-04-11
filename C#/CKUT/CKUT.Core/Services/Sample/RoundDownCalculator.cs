using System;
using CKUT.Core.Models.Sample;

namespace CKUT.Core.Services.Sample
{
    public class RoundDownCalculator : ICalculator
    {
        public decimal Calculate(InputDetail inputDetail)
        {
            return Math.Ceiling(inputDetail.InputNumber);
        }
    }
}