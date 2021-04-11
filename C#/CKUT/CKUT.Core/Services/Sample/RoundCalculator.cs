using System;
using CKUT.Core.Models.Sample;

namespace CKUT.Core.Services.Sample
{
    public class RoundCalculator : ICalculator
    {
        public decimal Calculate(InputDetail inputDetail)
        {
            return Math.Round(inputDetail.InputNumber);
        }
    }
}