using System;

namespace CKUT.Core.Services.Ch8._8._2._1
{
    public class CalculatorOriginal
    {
        private readonly decimal _num1;
        private readonly decimal _num2;

        public CalculatorOriginal(decimal num1, decimal num2)
        {
            _num1 = num1;
            _num2 = num2;
        }

        public decimal Calculate(CalculateMethod method)
        {
            switch (method)
            {
                case CalculateMethod.Plus:
                    return PlusTwoNumbers();
                case CalculateMethod.Minus:
                    return MinusTwoNumbers();
                case CalculateMethod.Multiply:
                    return MultiplyTwoNumbers();
                case CalculateMethod.Divided:
                    return DividedTwoNumbers();
                default:
                    throw new InvalidOperationException($"{nameof(method)} not found");
            }
        }

        private decimal PlusTwoNumbers()
        {
            return _num1 + _num2;
        }
        private decimal MinusTwoNumbers()
        {
            return _num1 - _num2;
        }
        private decimal MultiplyTwoNumbers()
        {
            return _num1 * _num2;
        }

        private decimal DividedTwoNumbers()
        {
            return RoundResult(_num1 / _num2);
        }

        private decimal RoundResult(decimal result)
        {
            return Math.Round(result);
        }
    }
}