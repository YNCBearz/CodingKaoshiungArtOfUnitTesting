using System;
using NUnit.Framework;
using CKUT.Core.Services.Ch3.No8;
using FluentAssertions;
using NSubstitute;

namespace CKUT.UnitTests.Ch3
{
    [TestFixture]
    public class Ch3Test6
    {
        private string _fileName;
        private LogAnalyzer _logAnalyer;
        private FakeManager _fakeManager;

        [SetUp]
        public void SetUp()
        {
            _fakeManager = new FakeManager();
            _logAnalyer = new TestableLogAnalyzer(_fakeManager);
        }

        [Test]
        public void LogAnalyzer_Should_Support_TxtFile()
        {
            GivenTxtFileName();
            _logAnalyer.IsValidFileName(_fileName).Should().Be(true);
        }

        [Test]
        public void LogAnalyzer_Should_Not_Support_PngFile()
        {
            GivenPngFileName();
            _logAnalyer.IsValidFileName(_fileName).Should().Be(false);
        }

        private void GivenTxtFileName()
        {
            _fileName = "1.txt";
        }

        private void GivenPngFileName()
        {
            _fileName = "1.png";
        }
    }

    public class TestableLogAnalyzer : LogAnalyzer
    {
        private IFileExtensionManager _manager;

        public TestableLogAnalyzer(IFileExtensionManager mgr)
        {
            _manager = mgr;
        }
        protected override IFileExtensionManager GetManager()
        {
            return _manager;
        }
    }
}