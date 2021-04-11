using System.Collections.Generic;
using CKUT.Core.Enums.Sample;
using CKUT.Core.Models.Sample;

namespace CKUT.Core.Services.Sample
{
    public class CalculatorService : ICalculatorService
    {

        private readonly Dictionary<CalculatedType, ICalculator> _calculatorLookup = new Dictionary<CalculatedType, ICalculator>
        {
            { CalculatedType.Round, new RoundCalculator() },
            { CalculatedType.RoundUp, new RoundUpCalculator() },
            { CalculatedType.RoundDown, new RoundDownCalculator() }
        };

        public decimal Calculate(InputDetail inputDetail)
        {
            return IsExistCalculatedType(inputDetail)
                ? _calculatorLookup[inputDetail.CalculatedType].Calculate(inputDetail)
                : UseDefaultCalculatedType(inputDetail);
        }

        private decimal UseDefaultCalculatedType(InputDetail inputDetail)
        {
            return _calculatorLookup[CalculatedType.Round].Calculate(inputDetail);
        }

        private bool IsExistCalculatedType(InputDetail inputDetail)
        {
            return _calculatorLookup.ContainsKey(inputDetail.CalculatedType);
        }
    }
}